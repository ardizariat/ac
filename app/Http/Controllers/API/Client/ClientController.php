<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\API\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Repositories\Interface\ClientInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $clientRepository;
    public function __construct(ClientInterface $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function layanan()
    {
        $data = $this->clientRepository->daftarLayanan();

        return ResponseFormatter::success($data, 'Data layanan berhasil diambil');
    }
}
