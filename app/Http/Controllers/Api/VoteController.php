<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    // Endpoint 2: Kirim Suara / Voting (POST /api/votes)
    public function store(Request $request)
    {
        $userId = $request->input('user_id');
        $candidateId = $request->input('candidate_id');

        // Validasi sederhana jika data tidak dikirim
        if (!$userId || !$candidateId) {
            return response()->json([
                'status'  => 'error',
                'message' => 'user_id dan candidate_id wajib diisi!'
            ], 400);
        }

        // Response Sukses Dummy
        return response()->json([
            'status'  => 'success',
            'message' => 'Berhasil melakukan voting!',
            'data'    => [
                'user_id'      => (int) $userId,
                'candidate_id' => (int) $candidateId,
                'voted_at'     => now()->toDateTimeString()
            ]
        ], 201);
    }

    // Endpoint 3: Rekap Perolehan Suara (GET /api/results)
    public function results()
    {
        return response()->json([
            'status'  => 'success',
            'message' => 'Data hasil perolehan suara berhasil diambil',
            'data'    => [
                'total_dpt'        => 1250,
                'total_suara_masuk'=> 970,
                'persentase'       => '77.6%',
                'rekap_paslon'     => [
                    [
                        'paslon_id'   => 1,
                        'nama_paslon' => 'Ahmad Fauzi & Rina Lestari',
                        'total_suara' => 520,
                        'persentase'  => '53.6%'
                    ],
                    [
                        'paslon_id'   => 2,
                        'nama_paslon' => 'Bintang Pratama & Maya Putri',
                        'total_suara' => 300,
                        'persentase'  => '30.9%'
                    ],
                    [
                        'paslon_id'   => 3,
                        'nama_paslon' => 'Citra Dewi & Doni Setiawan',
                        'total_suara' => 150,
                        'persentase'  => '15.5%'
                    ]
                ]
            ]
        ], 200);
    }
}