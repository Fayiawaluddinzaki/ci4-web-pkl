<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{

		$sdata=[
			'judul' => 'Club Mekar | Home Page'
		];

		return view('home/index',$sdata);
	}
	public function product()
	{
		$sdata=[
			'judul' => 'Club Mekar | Produk'
		];

		return view('home/product',$sdata);
	}
	public function catalog()
	{
		$sdata=[
			'judul' => 'Club Mekar | Katalog'
		];

		return view('home/catalog',$sdata);
	}
	public function aloe()
	{
		$sdata=[
			'judul' => 'Club Mekar | Aloe'
		];

		return view('home/aloe',$sdata);
	}
	public function fiber()
	{
		$sdata=[
			'judul' => 'Club Mekar | Protein & Fiber'
		];

		return view('home/fiber',$sdata);
	}
	public function teh()
	{
		$sdata=[
			'judul' => 'Club Mekar | Herbal Tea'
		];

		return view('home/teh',$sdata);
	}
	public function shake()
	{
		$sdata=[
			'judul' => 'Club Mekar | F1-Shake'
		];

		return view('home/shake',$sdata);
	}
	public function suplement()
	{
		$sdata=[
			'judul' => 'Club Mekar | Herbal Suplement'
		];

		return view('home/suplement',$sdata);
	}
	public function skincare()
	{
		$sdata=[
			'judul' => 'Club Mekar | Skincare'
		];

		return view('home/skincare',$sdata);
	}

	public function news1()
	{
		$sdata=[
			'judul' => 'Menghitung body mass index'
		];
		return view('home/article',$sdata);
	}

	public function news2()
	{
		$sdata=[
			'judul' => 'Menjaga Kesehatan & kebugaran tubuh'
		];
		return view('home/article2',$sdata);
	}

	public function news3()
	{
		$sdata=[
			'judul' => 'Gaya Hidup Sehat Selama Pandemi'
		];
		return view('home/article3',$sdata);
	}

	public function news4()
	{
		$sdata=[
			'judul' => 'Cara merawat kulit agar bersih dan sehat dengan mudah'
		];
		return view('home/article4',$sdata);
	}

	public function news5()
	{
		$sdata=[
			'judul' => '3 Cara Ukur Obesitas'
		];
		return view('home/article5',$sdata);
	}

	public function news6()
	{
		$sdata=[
			'judul' => '5 Manfaat Olahraga untuk Kesehatan'
		];
		return view('home/article6',$sdata);
	}
	
	// public function register()
	// {
	// 	return view('auth/register');
	// }
	// public function user()
	// {
	// 	return view('user/index');
	// }
}