<?php

namespace App\Http\Controllers;

use App\Models\JenisObat;
use Illuminate\Http\Request;
use App\Models\Obat;
class ObatController extends Controller
{
    protected $obatModel;
    public function __construct()
    {
        $this->obatModel = new Obat();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats = $this->obatModel->with('jenisObat')->get();
        return view('obat/index', [
            'obats' => $obats,
            'jenis_obats' => JenisObat::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->post());
        $obat = [
            'name' => $request->name,
            'jumlah' => $request->jumlah,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'satuan' => $request->satuan,
            'jenis_obat_id' => $request->jenis_obat_id,
            'sumber_dana' => $request->sumber_dana,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ];

        Obat::create($obat);
        return redirect()->route('penerimaan-obat.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // return view('obats.show',compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obats = Obat::find($id);        
          return view('obats.edit',[
            'obats' => $obats
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'name' => 'required',
            'jumlah' => 'required',

            'penerimaan_obat_id' => 'required',
        ]);
      
        Obat::where('id',$id)->update($request->post());
      
        return redirect()->route('obats.index')
                        ->with('success','akwoakwo successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obats = Obat::find($id);
         $obats->delete();
       
        return redirect()->route('penerimaan-obat.index')
                        ->with('success','ffgdgi');
    }
}