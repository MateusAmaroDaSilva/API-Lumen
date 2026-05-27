<?php

namespace Database\Seeders;

use App\Infrastructure\Models\EventModel;
use App\Models\User;
use App\Infrastructure\Models\TicketModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Limpar o banco primeiro
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        TicketModel::truncate();
        EventModel::truncate();
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Criar Eventos
        $events = [
            [
                'name' => 'Rock in Rio 2026',
                'description' => 'O maior festival de música do mundo está de volta. Garanta seu lugar para viver experiências inesquecíveis.',
                'price' => 750.00,
                'event_date' => Carbon::now()->addDays(120)->format('Y-m-d H:i:s'),
                'capacity' => 100000,
            ],
            [
                'name' => 'Lollapalooza Brasil',
                'description' => '3 dias de música, arte e cultura no Autódromo de Interlagos. Diversas atrações nacionais e internacionais.',
                'price' => 850.50,
                'event_date' => Carbon::now()->addDays(200)->format('Y-m-d H:i:s'),
                'capacity' => 80000,
            ],
            [
                'name' => 'Workshop de Laravel e Vue',
                'description' => 'Aprenda a criar aplicações modernas, robustas e escaláveis usando as melhores ferramentas do mercado.',
                'price' => 150.00,
                'event_date' => Carbon::now()->addDays(15)->format('Y-m-d H:i:s'),
                'capacity' => 50,
            ],
            [
                'name' => 'Conferência de Inteligência Artificial',
                'description' => 'Evento exclusivo com os maiores especialistas da área discutindo o futuro da IA (Vagas Esgotadas).',
                'price' => 400.00,
                'event_date' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
                'capacity' => 2, // Será esgotado pelo seeder
            ],
            [
                'name' => 'Tour Guiado: Museu da Tecnologia',
                'description' => 'Um evento que já aconteceu. Reviva a história da computação em nosso acervo histórico.',
                'price' => 50.00,
                'event_date' => Carbon::now()->subDays(10)->format('Y-m-d H:i:s'),
                'capacity' => 100,
            ]
        ];

        foreach ($events as $eventData) {
            EventModel::create($eventData);
        }

        // Criar Usuários
        $usersData = [
            ['name' => 'João Silva', 'email' => 'joao@example.com'],
            ['name' => 'Maria Oliveira', 'email' => 'maria@example.com'],
            ['name' => 'Carlos Souza', 'email' => 'carlos@example.com'],
            ['name' => 'Ana Beatriz', 'email' => 'ana@example.com'],
            ['name' => 'Pedro Almeida', 'email' => 'pedro@example.com'],
            ['name' => 'Fernanda Costa', 'email' => 'fernanda@example.com'],
        ];

        $users = [];
        foreach ($usersData as $userData) {
            $users[] = User::create($userData);
        }

        // Distribuir Tickets
        $allEvents = EventModel::all();
        
        // Comprar tickets para eventos normais
        foreach ($allEvents as $event) {
            if ($event->name === 'Tour Guiado: Museu da Tecnologia') {
                continue; // Evento passado, não criar tickets recentes
            }

            // Cada usuário compra de 1 a 2 ingressos para alguns eventos
            foreach ($users as $index => $user) {
                // Pular alguns usuários aleatoriamente
                if ($index % 2 == 0 && $event->id % 2 != 0) continue;

                TicketModel::create([
                    'event_id' => $event->id,
                    'user_id' => $user->id,
                    'status' => 'confirmed'
                ]);

                // Decrementar capacidade para manter consistência
                $event->decrement('capacity');

                // Se a capacidade chegou a 0 (como no caso da Conferência de IA), parar de vender
                if ($event->capacity <= 0) {
                    break;
                }
            }
        }
    }
}
