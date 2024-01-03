<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Announcement;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->admin();

        User::factory(10)->create(); //password

        $this->seedCategories();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    private function admin(){
        User::create([
            'is_revisor' => '1',
            'is_admin' => '1',
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => 'Pass123@',
            'email_verified_at' => now(),
        ]);
    }

    private function seedCategories()
    {
        $categoryNames = [
            ['name' => 'Immobiliare','image' => 'img/categories/Immobiliare.jpg','description' => 'Soluzioni abitative per ogni esigenza, dall\'appartamento di città alle dimore di campagna, offrendo spazi accoglienti e funzionali.'], 
            ['name' => 'Veicoli','image' => 'img/categories/Veicoli.jpg','description' => 'Ampia selezione di veicoli, dalle auto alle moto e camper, garantendo soluzioni di mobilità adatte a ogni stile di vita.'], 
            ['name' => 'Elettronica','image' => 'img/categories/Elettronica.jpg','description' => 'Tecnologia all\'avanguardia per semplificare la vita quotidiana, dai dispositivi smart agli elettrodomestici, garantendo comfort e innovazione.'], 
            ['name' => 'Abbigliamento','image' => 'img/categories/Abbigliamento.jpg','description' => 'Collezioni di abbigliamento per tutte le occasioni, dalle tendenze di moda alle linee classiche, per esprimere la propria personalità con stile.'], 
            ['name' => 'Arredamento','image' => 'img/categories/Arredamento.jpg','description' => 'Elementi d\'arredo per trasformare gli spazi, dai mobili alle decorazioni, offrendo soluzioni di design per ogni gusto e ambiente.'],
            ['name' => 'Lavoro','image' => 'img/categories/Lavoro.jpg','description' => 'Opportunità professionali in vari settori, dal freelance alle posizioni aziendali, supportando la crescita e lo sviluppo di carriera.'], 
            ['name' => 'Hobby','image' => 'img/categories/Hobby.jpg','description' => 'Attrezzature e accessori per tutti gli hobby, dai libri agli strumenti musicali, promuovendo il benessere attraverso le passioni personali.'], 
            ['name' => 'Animali','image' => 'img/categories/Animali.jpg','description' => 'Amici a quattro zampe in cerca di una nuova casa, dai cuccioli agli animali più anziani, pronti a condividere amore e compagnia.'], 
            ['name' => 'Gastronomia','image' => 'img/categories/Gastronomia.jpg','description' => 'Prodotti gastronomici per ogni palato, dai piatti pronti alle prelibatezze locali, soddisfacendo le diverse preferenze culinarie.'], 
            ['name' => 'Eventi','image' => 'img/categories/Eventi.jpg','description' => 'Servizi per la realizzazione di eventi memorabili, dalle feste private alle cerimonie, garantendo professionalità e attenzione ai dettagli.']
        ];

        foreach ($categoryNames as $name) {
            Category::create([
                'name' => $name['name'],
                'image' => $name['image'],
                'description' => $name['description'],

            ]);
        }


    }

    

   
}
