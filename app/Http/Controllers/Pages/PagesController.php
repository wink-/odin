<?php
namespace App\Http\Controllers\Pages;

use App\Analysis;
use App\Amperage;
use Carbon\Carbon;
use App\Temperature;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{


    public function amps()
    {
        

        $hard_anodize = Amperage::orderBy('created_at', 'desc')
            ->where('record_id', '=', '5')
            ->where('amp', '<', '2500')
            ->where('amp', '>', '-1')
            ->take(1440);
        $anodize = Amperage::orderBy('created_at', 'desc')
            ->where('record_id', '=', '7')
            ->where('amp', '<', '2500')
            ->where('amp', '>', '-1')
            ->take(1440);
        $barrel1 = Amperage::orderBy('created_at', 'desc')
            ->where('record_id', '=', '17')
            ->where('amp', '<', '2500')
            ->where('amp', '>', '-1')
            ->take(1440);
        $barrel2 = Amperage::orderBy('created_at', 'desc')
            ->where('record_id', '=', '19')
            ->where('amp', '<', '2500')
            ->where('amp', '>', '-1')
            ->take(1440);

        $rack5 = Amperage::orderBy('created_at', 'desc')
            ->where('record_id', '=', '21')
            ->where('amp', '<', '2500')
            ->where('amp', '>', '-1')
            ->take(1440);
        $rack6 = Amperage::orderBy('created_at', 'desc')
            ->where('record_id', '=', '22')
            ->where('amp', '<', '2500')
            ->where('amp', '>', '-1')
            ->take(1440);


        return view('pages.amps')
            ->with([
                'hard_anodize_dates' => array_column($hard_anodize->get()->toArray(), 'created_at'),
                'hard_anodize_amps' => $hard_anodize->pluck('amp'),
                'anodize_dates' => array_column($anodize->get()->toArray(), 'created_at'),
                'anodize_amps' => $anodize->pluck('amp'),
                'barrel1_dates' => array_column($barrel1->get()->toArray(), 'created_at'),
                'barrel1_amps' => $barrel1->pluck('amp'),
                'barrel2_dates' => array_column($barrel2->get()->toArray(), 'created_at'),
                'barrel2_amps' => $barrel2->pluck('amp'),
                'rack5_dates' => array_column($rack5->get()->toArray(), 'created_at'),
                'rack5_amps' => $rack5->pluck('amp'),
                'rack6_dates' =>array_column($rack6->get()->toArray(), 'created_at'),
                'rack6_amps' => $rack6->pluck('amp'),
                ]);
    }

    public function ovens()
    {
        
        //$grieve = Temperature::orderBy('created_at', 'desc')->where('record_id', '1')->first();
        $grieve = Temperature::latestTemperature('1');
        $quincy = Temperature::latestTemperature('2');
        $lindberg = Temperature::latestTemperature('3');

       

  
        $grieve_all = Temperature::where('record_id', 1)->orderBy('created_at', 'desc')->take(1440);
        $quincy_all = Temperature::orderBy('created_at', 'desc')->where('record_id', '2')->take(1440);
        $lindberg_all = Temperature::orderBy('created_at', 'desc')->where('record_id', '3')->take(1440);
        //$dates_grieve = array_column($grieve_all->get()->toArray(), 'created_at');        
        

        return view('pages.ovens', compact('grieve', 'quincy', 'lindberg', 'dates_grieve'))
            ->with([
                'dates_grieve' => array_column($grieve_all->get()->toArray(), 'created_at'),
                'temperatures_grieve' => $grieve_all->pluck('temperature'),
                'dates_quincy' => array_column($quincy_all->get()->toArray(), 'created_at'),
                'temperatures_quincy' => $quincy_all->pluck('temperature'),
                'dates_lindberg' => array_column($lindberg_all->get()->toArray(), 'created_at'),
                'temperatures_lindberg' => $lindberg_all->pluck('temperature'),
                ]);
    }
    /**
     * Displays analysis values of the tanks and its limits
     *
     * @return Response
     */
    public function solutions()
    {

        // Electroless Nickel Tanks EN1 - EN9

        $EN1 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN1')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN2 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN2')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN3 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN3')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN4 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN4')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN5 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN5')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN6 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN6')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN7 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN7')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN8 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN8')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN9 = Analysis::select('RecordName', 'FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN9')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();

        // Alkaline Zinc Tanks Zinc1, Zinc2, Zinc3, Zinc5, Zinc6
        // Value2 is zinc metal, Value3 is Caustic
        $ZN1 = Analysis::select('RecordName', 'FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc1')
        ->where('Value2', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ZN2 = Analysis::select('RecordName', 'FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc2')
        ->where('Value2', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ZN3 = Analysis::select('RecordName', 'FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc3')
        ->where('Value2', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ZN5 = Analysis::select('RecordName', 'FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc5')
        ->where('Value2', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ZN6 = Analysis::select('RecordName', 'FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc6')
        ->where('Value2', '>', 0)
        ->orderBy('Date', 'desc')->first();


        // Anodize Tanks AN1 = Hard Anodize, AN2 = Normal Anodize
        // Value5 is Free Acid, Value 6 is Total Aluminum
        $AN1 = Analysis::select('RecordName', 'FormName', 'Value5', 'Value6', 'Date')
        ->where('RecordName', '=', 'HD Anodize')
        ->where('Value5', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $AN2 = Analysis::select('RecordName', 'FormName', 'Value5', 'Value6', 'Date')
        ->where('RecordName', '=', 'Anodize2')
        ->where('Value5', '>', 0)
        ->orderBy('Date', 'desc')->first();

        // Zinc Nickel
        // Value1 is pH, Value7 is Zinc Metal, Value 8 is Nickel Metal, Value10 is total chloride
        $ZNNI1 = Analysis::select('RecordName', 'FormName', 'Value1', 'Value7', 'Value8', 'Value10', 'Date')
        ->where('RecordName', '=', 'Zinc Nickel')
        ->where('Value7', '>', 0)
        ->orderBy('Date', 'desc')->first();

        // Hard Chrome CR1 is the larger tank. CR2 is the smaller tank
        // Value3 is chrome metal
        $CR1 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Big Chrome')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $CR2 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Small Chrome')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        // Cleaners An Clean1, An Clean 2, BL Clean 1, BL Clean 2, Cr Clean 1, EO soak cleaner,
        // Ni Al Clean, Ni Clean 1, Ni Clean 2, Zinc Clean 1
        // Value3 is concentration
        $ANClean1 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'An Clean1')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ANClean2 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'An Clean 2')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $BLClean1 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'BL Clean 1')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $BLClean2 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'BL Clean 2')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();
     
        $CrClean1 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Cr Clean 1')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $EOsoakcleaner = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'EO soak cleaner')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $NiAlClean = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Ni Al Clean')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $NiClean1 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Ni Clean 1')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $NiClean2 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Ni Clean 2')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $ZincClean1 = Analysis::select('RecordName', 'FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc Clean 1')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        // Tin bright and tin bull
        $TinBright = Analysis::select('RecordName', 'FormName', 'Value3', 'Value5', 'Value6', 'Date')
        ->where('RecordName', '=', 'Bright Tin')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $TinDull = Analysis::select('RecordName', 'FormName', 'Value3', 'Value5', 'Value6', 'Date')
        ->where('RecordName', '=', 'Dull Tin')
        ->where('Value3', '>', 0)
        ->orderBy('Date', 'desc')->first();

        //Cad Tanks Big Cad Tk, SmCadTk
        $BigCad = Analysis::select('RecordName', 'FormName', 'Value2', 'Value4', 'Value6', 'Value8', 'Date')
        ->where('RecordName', '=', 'Big Cad Tk')
        ->where('Value4', '>', 0)
        ->orderBy('Date', 'desc')->first();

        //Chem Film
        $ChConYl = Analysis::select('RecordName', 'FormName', 'Value1', 'Value4', 'Date')
        ->where('RecordName', '=', 'ChemConv1')
        ->where('Value1', '>', 0)
        ->orderBy('Date', 'desc')->first();

        $ChConTri = Analysis::select('RecordName', 'FormName', 'Value1', 'Value3', 'Date')
        ->where('RecordName', '=', 'ChemConv2')
        ->where('Value1', '>', 0)
        ->orderBy('Date', 'desc')->first();

        // l_ denotes low limit, h_ denotes high limit
        $limits = [
            "l_en_metal" => 0.5, "h_en_metal" => 0.85, "l_en_pH" => 4.2, "h_en_pH" => 5.4,
            "l_zinc_metal" => 0.5, "h_zinc_metal" => 2.0, "l_zinc_caustic" => 8.0, "h_zinc_caustic" => 20.0,
            "l_hard_anodize_free_acid" => 12.5, "h_hard_anodize_free_acid" => 15.0, "l_hard_anodize_total_aluminum" => 1.0, "h_hard_anodize_total_aluminum" => 2.5,
            "l_anodize_free_acid" => 12.5, "h_anodize_free_acid" => 15.0, "l_anodize_total_aluminum" => 1.0, "h_anodize_total_aluminum" => 2.5,
            "l_chrome_metal" => 30.0, "h_chrome_metal" => 45.0,
            "l_tin_bright_metal" => 1.0, "h_tin_bright_metal" => 4.0, "l_tin_bright_sulfuric_acid" => 8.0, "h_tin_bright_sulfuric_acid" => 12.0,
                "l_tin_bright_stannous_sulfate" => 3, "h_tin_bright_stannous_sulfate" => 6.0,
            "l_tin_dull_sodium_stannate" => 6.0, "h_tin_dull_sodium_stannate" => 22.0, "l_tin_dull_free_caustic" => 1.0, "h_tin_dull_free_caustic" => 2.0,
            "l_zinc_nickel_zinc_metal" => 3.5, "h_zinc_nickel_zinc_metal" => 4.5, "l_zinc_nickel_nickel_metal" => 2.8, "h_zinc_nickel_nickel_metal" => 3.3,
                "l_zinc_nickel_total_chloride" => 27.0, "h_zinc_nickel_total_chloride" => 33.0, "l_zinc_nickel_pH" =>5.3, "h_zinc_nickel_pH" => 6.0,
            "l_heatbath1448" => 8.0, "h_heatbath1448" => 18.0, "l_oakite164" => 6.0, "h_oakite164" => 16.0, "l_nuvat" => 4.0, "h_nuvat" => 10.0,
            "l_cad_pH" => 11.0, "h_cad_pH" => 13.0, "l_cad_total_sodium_cyanide" => 13, "h_cad_total_sodium_cyanide" => 20.0, "l_cad_metal" => 2.1,
                "h_cad_metal" => 4.0, "l_cad_sodium_hydroxide" => 1.5, "h_cad_sodium_hydroxide" => 4.0,
            "l_chem_yl_pH" => 1.1, "h_chem_yl_pH" => 2.0, "l_chem_yl_concentration" => 0.75, "h_chem_yl_concentration" => 2.25,
            "l_chem_tri_pH" => 3.6, "h_chem_tri_pH" => 3.95, "l_chem_tri_concentration" => 19.0, "h_chem_tri_concentration" => 28.0,

            ];
        // Cleaners An Clean1, An Clean 2, BL Clean 1, BL Clean 2, Cr Clean 1, EO soak cleaner,
        // Ni Al Clean, Ni Clean 1, Ni Clean 2, Zinc Clean 1
        return view(
            'pages.solutions',
            $limits,
            compact(
                'EN1',
                'EN2',
                'EN3',
                'EN4',
                'EN5',
                'EN6',
                'EN7',
                'EN8',
                'EN9',
                'ZN1',
                'ZN2',
                'ZN3',
                'ZN5',
                'ZN6',
                'AN1',
                'AN2',
                'ZNNI1',
                'CR1',
                'CR2',
                'ANClean1',
                'ANClean2',
                'BLClean1',
                'BLClean2',
                'CrClean1',
                'EOsoakcleaner',
                'NiAlClean',
                'NiClean1',
                'NiClean2',
                'ZincClean1',
                'TinBright',
                'TinDull',
                'BigCad',
                'ChConYl',
                'ChConTri'
            )
        );
    }
} //end of class PagesController
