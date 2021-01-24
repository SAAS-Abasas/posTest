<?php

namespace App\Console\Commands;

use App\Models\category;
use App\Models\onlineSync;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\Http;

class SyncDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:database';
    protected $datas;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $this->datas = onlineSync::all();
        foreach ($this->datas as $data) {
            $data->data = $data->model::find($data->reference_id);
            $response = Http::withBasicAuth('admin@abasas.tech', '1234')->retry(3, 500)->post('https://demos.abasas.tech/saas/Delta/public/api/sync-database', [
                'data' => $data
            ]);
            if ($response->status() == 200) {
                $data->delete();
            }
        }
    }
}
