<?php

namespace App\Controllers;

use App\Models\JbarangModel;
use App\Models\SbarangModel;
use CodeIgniter\HTTP\Request;

class User extends BaseController
{
	protected $SModel;
	protected $JModel;
	public function __construct()
	{
		$this->SModel = new SbarangModel();
		$this->JModel = new JbarangModel();
	}


	public function user()
	{
		return view('user/index');
	}

	public function index()
	{
		// $JModel = new JbarangModel();
		$stokbrg = $this->SModel->findAll();
		$mod = $this->JModel->findAll();

		$tdata = [
			'title' => 'Admin | Home Page',
			'rekap' => $mod,
			'stok' => $stokbrg
		];

		return view('user/index', $tdata);
	}

	public function input()
	{
		$tdata = [
			'title' => 'Tambah Barang'
		];

		return view('user/input', $tdata);
	}

	public function penjualan()
	{
		$mod = $this->JModel->findAll();
		$tdata = [
			'title' => 'Penjualan',
			'rekap' => $mod
		];

		return view('user/penjualan', $tdata);
	}

	public function rekap()
	{
		$mod = $this->JModel->findAll();
		$tdata = [
			'title' => 'Print',
			'rekap' => $mod
		];

		return view('user/rekap', $tdata);
	}

	public function stok()
	{
		$stokbrg = $this->SModel->findAll();
		$tdata = [
			'title' => 'Stok Barang',
			'stok' => $stokbrg
		];
		// dd($stokbrg);

		return view('user/stok', $tdata);
	}

	public function terjual()
	{
		$tdata = [
			'title' => 'Barang Terjual'
		];

		return view('user/terjual', $tdata);
	}

	public function print()
	{
		$mod = $this->JModel->findAll();
		$tdata = [
			'title' => 'Barang Terjual',
			'rekap' => $mod
		];

		return view('user/print', $tdata);
	}

	public function output()
	{
		$tdata = [
			'title' => 'Barang Terjual'
		];

		return view('user/output', $tdata);
	}

	public function save()
	{
		//menampilkan array input yang diterima
		// dd($this->request->getVar());

		//input database dengan model
		$this->SModel->save([
			'nama_barang'=>$this->request->getVar('nama_produk'),
			'jumlah_barang'=>$this->request->getVar('jumlah_barang'),
			'hargabarang'=>$this->request->getVar('harga'),
			'tanggal_masuk'=>$this->request->getVar('tanggal_masuk')
		]);
		
		//input database dengan query builder/manual
		// $db = \Config\Database::connect();
		// $builder = $db->table('jbarang');
		// $data=['nama_barang'=>$this->request->getVar('nama_produk'),
		// 'jumlah_barang'=>$this->request->getVar('jumlah_barang'),
		// 'hargabarang'=>$this->request->getVar('harga'),
		// 'tanggal_masuk'=>$this->request->getVar('tanggal_masuk')];

		// $builder->insert($data);

		return redirect()->to('/user/stok');
		// return view('/user/stok');
		
	}

	public function outer()
	{
		//untuk menampilkan array
		// dd($this->request->getVar());

		//input database dengan model
		// $this->JModel->outer([
		// 	'nama_barang'=>$this->request->getVar('nama'),
		// 	'jumlah_barang'=>$this->request->getVar('jumlah'),
		// 	'hargabarang'=>$this->request->getVar('harga'),
		// 	'tanggal_keluar'=>$this->request->getVar('tanggal')
		// ]);

		//input database manual
		$db = \Config\Database::connect();
		$builder = $db->table('jbarang');
		$data=['nama_barang'=>$this->request->getVar('nama'),
		'jumlah_barang'=>$this->request->getVar('jumlah'),
		'hargabarang'=>$this->request->getVar('harga'),
		'tanggal_keluar'=>$this->request->getVar('tanggal')];

		$builder->insert($data);


		return redirect()->to('/user/penjualan');
		// return view('/user/penjualan');
		
	}


	public function sell($id_jual)
	{
		$this->JModel->delete($id_jual);
		return redirect()->to('/user/penjualan');
	}


	public function dellbuy($id_stok)
	{
		$this->SModel->delete($id_stok);
		return redirect()->to('/user/stok');
	}
}
