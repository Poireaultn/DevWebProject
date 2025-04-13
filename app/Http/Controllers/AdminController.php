<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Item;
use App\Models\LoginHistory;
use App\Models\ActionLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_users' => User::count(),
            'active_users' => User::where('last_login', '>=', now()->subDays(30))->count(),
            'total_items' => Item::count(),
            'total_categories' => Category::count(),
        ];

        return view('admin.index', compact('stats'));
    }

    // Gestion des utilisateurs
    public function users()
    {
        $users = User::paginate(15);
        return view('admin.users.index', compact('users'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:user,admin,manager'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role']
        ]);

        return redirect()->route('admin.users')->with('success', 'Utilisateur créé avec succès');
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|string|in:user,admin,manager'
        ]);

        $user->update($validated);

        return redirect()->route('admin.users')->with('success', 'Utilisateur mis à jour avec succès');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'Utilisateur supprimé avec succès');
    }

    // Historiques
    public function loginHistory()
    {
        $history = LoginHistory::with('user')->latest()->paginate(20);
        return view('admin.history.logins', compact('history'));
    }

    public function actionLogs()
    {
        $logs = ActionLog::with('user')->latest()->paginate(20);
        return view('admin.history.actions', compact('logs'));
    }

    // Gestion des catégories
    public function categories()
    {
        $categories = Category::paginate(15);
        return view('admin.categories.index', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:object,tool,service'
        ]);

        Category::create($validated);

        return redirect()->route('admin.categories')->with('success', 'Catégorie créée avec succès');
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Catégorie supprimée avec succès');
    }

    // Gestion des objets et services
    public function items()
    {
        $items = Item::with('category')->paginate(15);
        return view('admin.items.index', compact('items'));
    }

    public function storeItem(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'status' => 'required|string'
        ]);

        Item::create($validated);

        return redirect()->route('admin.items')->with('success', 'Item créé avec succès');
    }

    public function deleteItem(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.items')->with('success', 'Item supprimé avec succès');
    }

    // Sécurité et maintenance
    public function updateAdminPassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|password',
            'new_password' => 'required|string|min:8|confirmed'
        ]);

        auth()->user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('success', 'Mot de passe mis à jour avec succès');
    }

    public function backupDatabase()
    {
        // Logique de sauvegarde de la base de données
        $filename = 'backup-' . Carbon::now()->format('Y-m-d-H-i-s') . '.sql';
        $command = "mysqldump -u " . env('DB_USERNAME') . " -p" . env('DB_PASSWORD') . " " . env('DB_DATABASE') . " > " . storage_path('app/backups/' . $filename);
        
        exec($command);

        return back()->with('success', 'Sauvegarde effectuée avec succès');
    }

    public function verifyDatabaseIntegrity()
    {
        $tables = DB::select('SHOW TABLES');
        $errors = [];

        foreach ($tables as $table) {
            $tableName = array_values((array)$table)[0];
            $check = DB::select("CHECK TABLE $tableName");
            if ($check[0]->Msg_text !== "OK") {
                $errors[] = "Problème avec la table $tableName: " . $check[0]->Msg_text;
            }
        }

        return view('admin.maintenance.integrity', ['errors' => $errors]);
    }

    // Statistiques
    public function statistics()
    {
        $energyStats = [
            'total_consumption' => DB::table('energy_consumption')->sum('consumption'),
            'monthly_average' => DB::table('energy_consumption')
                ->where('created_at', '>=', now()->subMonth())
                ->avg('consumption'),
        ];

        $userStats = [
            'total_logins' => LoginHistory::count(),
            'active_users' => User::where('last_login', '>=', now()->subDays(30))->count(),
            'new_users' => User::where('created_at', '>=', now()->subMonth())->count(),
        ];

        $serviceStats = DB::table('service_usage')
            ->select('service_name', DB::raw('count(*) as total_uses'))
            ->groupBy('service_name')
            ->orderByDesc('total_uses')
            ->limit(10)
            ->get();

        return view('admin.statistics', compact('energyStats', 'userStats', 'serviceStats'));
    }
} 