<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    // 1. GET Semua Data
    public function index()
    {
        $candidates = Candidate::all();
        return response()->json([
            'status'  => 'success',
            'message' => 'Data kandidat berhasil diambil',
            'data'    => $candidates
        ], 200);
    }

    // 2. GET Satu Data (by ID)
    public function show($id)
    {
        $candidate = Candidate::find($id);
        if (!$candidate) {
            return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json([
            'status'  => 'success',
            'message' => 'Detail kandidat berhasil diambil',
            'data'    => $candidate
        ], 200);
    }

    // 3. POST Tambah Data
    public function store(Request $request)
    {
        $request->validate([
            'nomor_urut' => 'required',
            'nama_ketua' => 'required',
            'nama_wakil' => 'required',
            'visi'       => 'required',
            'misi'       => 'required',
        ]);

        $candidate = Candidate::create($request->all());

        return response()->json([
            'status'  => 'success',
            'message' => 'Kandidat berhasil ditambahkan',
            'data'    => $candidate
        ], 201);
    }

    // 4. PUT Update Data
    public function update(Request $request, $id)
    {
        $candidate = Candidate::find($id);
        if (!$candidate) {
            return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        }

        $candidate->update($request->all());

        return response()->json([
            'status'  => 'success',
            'message' => 'Data kandidat berhasil diperbarui',
            'data'    => $candidate
        ], 200);
    }

    // 5. DELETE Hapus Data
    public function destroy($id)
    {
        $candidate = Candidate::find($id);
        if (!$candidate) {
            return response()->json(['status' => 'error', 'message' => 'Data tidak ditemukan'], 404);
        }

        $candidate->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Data kandidat berhasil dihapus'
        ], 200);
    }
}