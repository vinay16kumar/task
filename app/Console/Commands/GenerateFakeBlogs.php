<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as FakerFactory;
use App\Models\BlogPost;
use Illuminate\Support\Arr;

class GenerateFakeBlogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'command:name';
    protected $signature = 'faker:generate-blogs {count=50000}';

    protected $description = 'Generate fake blogs using Faker';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = (int) $this->argument('count');
        $faker = FakerFactory::create();

        $this->info("Generating $count fake blogs...");

        $bar = $this->output->createProgressBar($count);

        for ($i = 0; $i < $count; $i++) {
            BlogPost::create([
                'title' => $faker->sentence(),
                'content' => $faker->paragraphs(3, true),
                'tags' => Arr::random($faker->words(3)), // Assign a random tag instead of an array
                // Set other fields (image, etc.) based on your requirements
            ]);

            $bar->advance();
        }

        $bar->finish();
        $this->line('');
        $this->info("Successfully generated $count fake blogs!");
    }
}
