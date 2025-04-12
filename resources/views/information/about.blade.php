@extends('layouts.app')

@section('title', 'À propos de nous')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">À propos de CY Tech</h1>

        <!-- Image de l'école -->
        <div class="mb-8">
            <img src="{{ asset('images/cytech-building.jpg') }}" alt="CY Tech Campus" class="w-full h-auto rounded-lg shadow-lg">
        </div>

        <!-- Histoire de l'école -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-4">Notre Histoire</h2>
            <div class="prose max-w-none">
                <p class="mb-4">CY Tech est née de la fusion de l'EISTI (École Internationale des Sciences du Traitement de l'Information) et de l'université de Cergy-Pontoise. Cette fusion marque une étape importante dans l'histoire de l'enseignement supérieur du Val d'Oise.</p>
                
                <h3 class="text-xl font-semibold mt-6 mb-3">Événements marquants :</h3>
                <ul class="list-disc pl-6 mb-6">
                    <li>1983 : Création de l'EISTI</li>
                    <li>2020 : Fusion et création de CY Tech</li>
                    <li>2021 : Développement des nouveaux programmes d'excellence</li>
                    <li>2022 : Renforcement des partenariats internationaux</li>
                </ul>
            </div>
        </section>

        <!-- Valeurs de l'école -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-6">Nos Valeurs : PROSE</h2>
            <div class="grid md:grid-cols-1 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Professionnalisme</h3>
                    <p class="mb-4">Le professionnalisme est au cœur de notre identité. Nous attendons de nos étudiants :</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Une ponctualité et une assiduité exemplaires</li>
                        <li>Une tenue vestimentaire appropriée au cadre professionnel</li>
                        <li>Un comportement exemplaire en toutes circonstances</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md mt-4">
                    <h3 class="text-xl font-semibold mb-3 text-green-600">Respect</h3>
                    <p class="mb-4">Le respect est fondamental dans notre établissement :</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Respect des locaux et du matériel</li>
                        <li>Respect des règles de vie commune</li>
                        <li>Respect mutuel entre étudiants et envers le corps enseignant</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md mt-4">
                    <h3 class="text-xl font-semibold mb-3 text-purple-600">Ouverture</h3>
                    <p class="mb-4">L'ouverture se manifeste par :</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Une curiosité intellectuelle constante</li>
                        <li>Une volonté d'apprendre et de progresser</li>
                        <li>Une ouverture aux autres et aux nouvelles idées</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md mt-4">
                    <h3 class="text-xl font-semibold mb-3 text-orange-600">Solidarité</h3>
                    <p class="mb-4">La solidarité s'exprime à travers :</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>L'entraide entre étudiants</li>
                        <li>Le partage des connaissances</li>
                        <li>Le soutien mutuel dans les projets</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md mt-4">
                    <h3 class="text-xl font-semibold mb-3 text-red-600">Ethique</h3>
                    <p class="mb-4">L'éthique guide nos actions par :</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>L'intégrité dans le travail</li>
                        <li>Le respect des règles déontologiques</li>
                        <li>Un comportement responsable et citoyen</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection 