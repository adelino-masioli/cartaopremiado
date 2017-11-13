<?php

namespace App\Http\Controllers;

use App\Cupom;
use Illuminate\Http\Request;
use League\Csv\Reader;

class CupomController extends Controller
{
    public function consult(Request $request){
        $document = trim($request->txt_document);
        if($document==''){
            session()->forget('my_cupons');
            session()->put('message_cupom', 'Favor informar um CNPJ ou CPF válido!');
            return redirect('/numeros-da-sorte');
        }else{
            $cupons = Cupom::where('document', $document);
            if($cupons->count() == 0){
                session()->forget('my_cupons');
                session()->put('message_cupom', 'Nenhum cumpom encontrado!');
                return redirect('/numeros-da-sorte');
            }else{
                session()->forget('message_cupom');

                session()->put('my_cupons', $cupons->get());
                return redirect('/numeros-da-sorte');
            }
        }
    }

    public function numbers()
    {
        $cupons = session()->get('my_cupons');
        return view('site.numeros-da-sorte', compact('cupons'));
    }

    public function cartapremiado($slug){
        session()->forget('lk_goto');
        session()->put('lk_goto', '#'.$slug);
        return redirect('/');
    }

    public function uploadFile()
    {
        $arquivo = 'upload/cupons.csv';
        if (!empty($arquivo)) {

            //$filename = public_path() . '/' . $arquivo;
            $filename =  $arquivo;
            if ($filename) {

                //abrindo o arquivo com a library League\Csv\Reader;
                $csv = Reader::createFromPath($filename);

                //seta o delimitador
                $csv->setDelimiter(",");

                foreach ($csv as $index => $row) {
                    //verifica se tem linha em branco no arquivo, se tiver não processa a linha
                    if ($row[0] != '') {
                        if ($index > 0) {
                            $document1 = str_replace('-', '', trim($row[0]));
                            $document2 = str_replace('.', '', $document1);
                            $cupom     = str_replace(',', '', trim($row[2]));

                            $data_db = array(
                                'document'   => trim($document2),
                                'serie'      => trim($row[1]),
                                'cupom'      => trim($cupom),
                                'uar'        => trim($row[3]),
                                'singular'   => trim($row[4]),
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s'),

                            );
                            $validate = Cupom::where('cupom', $cupom)->count();
                            if($validate == 0) {
                                $createcsv = new Cupom($data_db);
                                $createcsv->save();
                            }
                        }
                    }
                }

            } else {
                return FALSE;
            }

        }
    }
}
