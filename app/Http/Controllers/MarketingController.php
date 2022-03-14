<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

use App\Models\Marketing;

class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dados = Marketing::orderBy('id' , 'desc')->paginate(15);

        $msg = null;
        return view('admin.marketing-captura', ["msg" => $msg , "dados" => $dados ]);
    }

    public function envia(){

        return view('admin.marketing-envia');
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
    public function assinar(Request $request)
    {
        $marketing = new Marketing();
        $marketing->name = $request->name;
        $marketing->whatsapp = $request->whatsapp;
        $marketing->status = 0;
        $marketing->order = 1;

        $marketing->save();

        return redirect('./');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trata = explode("WhatsApp", $request);
        $i = 0;
        foreach ($trata as $valor) {
            $i++;
            $trata2 = explode("+", $valor);

            $trata2 = str_replace("%28", "(", $trata2);
            $trata2 = str_replace("%29", ")", $trata2);

            $trata2 = str_replace("-", "", $trata2);
            $trata2 = str_replace(".", "", $trata2);
            $trata2 = str_replace("%", "", $trata2);
            $trata2 = str_replace("A", "", $trata2);
            $trata2 = str_replace("a", "", $trata2);
            $trata2 = str_replace("B", "", $trata2);
            $trata2 = str_replace("b", "", $trata2);
            $trata2 = str_replace("C", "", $trata2);
            $trata2 = str_replace("c", "", $trata2);
            $trata2 = str_replace("D", "", $trata2);
            $trata2 = str_replace("d", "", $trata2);
            $trata2 = str_replace("E", "", $trata2);
            $trata2 = str_replace("e", "", $trata2);
            $trata2 = str_replace("F", "", $trata2);
            $trata2 = str_replace("f", "", $trata2);
            $trata2 = str_replace("G", "", $trata2);
            $trata2 = str_replace("g", "", $trata2);
            $trata2 = str_replace("H", "", $trata2);
            $trata2 = str_replace("h", "", $trata2);
            $trata2 = str_replace("I", "", $trata2);
            $trata2 = str_replace("i", "", $trata2);
            $trata2 = str_replace("J", "", $trata2);
            $trata2 = str_replace("j", "", $trata2);
            $trata2 = str_replace("K", "", $trata2);
            $trata2 = str_replace("k", "", $trata2);
            $trata2 = str_replace("L", "", $trata2);
            $trata2 = str_replace("l", "", $trata2);
            $trata2 = str_replace("M", "", $trata2);
            $trata2 = str_replace("m", "", $trata2);
            $trata2 = str_replace("N", "", $trata2);
            $trata2 = str_replace("n", "", $trata2);
            $trata2 = str_replace("O", "", $trata2);
            $trata2 = str_replace("o", "", $trata2);
            $trata2 = str_replace("P", "", $trata2);
            $trata2 = str_replace("p", "", $trata2);
            $trata2 = str_replace("Q", "", $trata2);
            $trata2 = str_replace("q", "", $trata2);
            $trata2 = str_replace("R", "", $trata2);
            $trata2 = str_replace("r", "", $trata2);
            $trata2 = str_replace("S", "", $trata2);
            $trata2 = str_replace("s", "", $trata2);
            $trata2 = str_replace("T", "", $trata2);
            $trata2 = str_replace("t", "", $trata2);
            $trata2 = str_replace("U", "", $trata2);
            $trata2 = str_replace("u", "", $trata2);
            $trata2 = str_replace("V", "", $trata2);
            $trata2 = str_replace("v", "", $trata2);
            $trata2 = str_replace("X", "", $trata2);
            $trata2 = str_replace("x", "", $trata2);
            $trata2 = str_replace("Y", "", $trata2);
            $trata2 = str_replace("y", "", $trata2);
            $trata2 = str_replace("W", "", $trata2);
            $trata2 = str_replace("w", "", $trata2);
            $trata2 = str_replace("Z", "", $trata2);
            $trata2 = str_replace("z", "", $trata2);

            $novo = implode(',', $trata2);

            $novo = str_replace(",", "", $novo);

            if (mb_strpos($novo, "{$request->ddd}") !== false) {

                $posicao = strpos($novo, "{$request->ddd}");

                $somar = $posicao + 4;

                $final = $somar + 9;

                $telefone = substr($novo, $somar, 9);
              //  echo "<b>Telefone é " . "{$request->ddd}" . $telefone;

                $whatsapp = $request->ddd . $telefone;

                echo "<b> WhatsApp é </b> " . $whatsapp;
            }

            $marketing = new Marketing();
            $marketing->name = $request->termo;
            $marketing->whatsapp = $whatsapp;
            $marketing->status = 0;
            $marketing->order = 1;

            $marketing->save();
        }

        sleep(30);
        return redirect('./marketing/captura')->with('msg', "Foram Adicionado {{$i}} eventos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
