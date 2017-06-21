@extends('layouts.app')

@section('content')


<div class="col-xs-6">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Electroless Nickel</strong></caption>
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Nickel</th><th>pH</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$EN1->RecordName}}</td>
                    <td>{{$EN1->FormName . ' - ' . $EN1->Value12}}</td>

                    {!! $EN1->Value4 < $l_en_metal || $EN1->Value4 > $h_en_metal ? "<td class='outRange'>" : "<td class='inRange'>"!!} 
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN1->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$EN1->Value1}}</td>
                    <td>{{$EN1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN2->RecordName}}</td>
                    <td>{{$EN2->FormName . ' - ' . $EN2->Value12}}</td>
                    {!! $EN2->Value4 < $l_en_metal || $EN2->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} 
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN2->Value4 . ' oz/gal'}}</span></td>                    
                    <td>{{$EN2->Value1}}</td>
                    <td>{{$EN2->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN3->RecordName}}</td>
                    <td>{{$EN3->FormName . ' - ' . $EN3->Value12}}</td>
                   {!! $EN3->Value4 < $l_en_metal || $EN3->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} 
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN3->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$EN3->Value1}}</td>
                    <td>{{$EN3->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN4->RecordName}}</td>
                    <td>{{$EN4->FormName . ' - ' . $EN4->Value12}}</td>
                   {!! $EN4->Value4 < $l_en_metal || $EN4->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} 
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN4->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$EN4->Value1}}</td>
                    <td>{{$EN4->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN5->RecordName}}</td>
                    <td>{{$EN5->FormName . ' - ' . $EN5->Value12}}</td>
                    {!! $EN5->Value4 < $l_en_metal || $EN5->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN5->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$EN5->Value1}}</td>
                    <td>{{$EN5->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN6->RecordName}}</td>
                    <td>{{$EN6->FormName . ' - ' . $EN6->Value12}}</td>
                    {!! $EN6->Value4 < $l_en_metal || $EN6->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN6->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$EN6->Value1}}</td>
                    <td>{{$EN6->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN7->RecordName}}</td>
                    <td>{{$EN7->FormName . ' - ' . $EN7->Value12}}</td>
                    {!! $EN7->Value4 < $l_en_metal || $EN7->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN7->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$EN7->Value1}}</td>
                    <td>{{$EN7->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN8->RecordName}}</td>
                    <td>{{$EN8->FormName . ' - ' . $EN8->Value12}}</td>
                    {!! $EN8->Value4 < $l_en_metal || $EN8->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN8->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$EN8->Value1}}</td>
                    <td>{{$EN8->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN9->RecordName}}</td>
                    <td>{{$EN9->FormName . ' - ' . $EN9->Value12}}</td>
                    {!! $EN9->Value4 < $l_en_metal || $EN9->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_en_metal . ' to ' . $h_en_metal}}">{{$EN9->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$EN9->Value1}}</td>
                    <td>{{$EN9->Date->diffForHumans()}}</td>
                </tr>                                                                                
            </tbody>   
        </table>
    </div>
</div>

<div class="col-xs-6">
    <div class="table-responsive">
        <table class="table  table-bordered table-striped table-hover table-condensed">
            <caption><strong>Cleaners</strong></caption>
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Concentration</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$ANClean1->RecordName}}</td>
                    <td>{{$ANClean1->FormName }}</td>

                    {!! $ANClean1->Value3 < $l_oakite164 || $ANClean1->Value3 > $h_oakite164 ? '<td class="outRange">' : '<td class="inRange">'!!} 
                    <span data-toggle='tooltip' title="{{$l_oakite164 . ' to ' . $h_oakite164}}">{{$ANClean1->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$ANClean1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ANClean2->RecordName}}</td>
                    <td>{{$ANClean2->FormName}}</td>

                    {!! $ANClean2->Value3 < $l_oakite164 || $ANClean2->Value3 > $h_oakite164 ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_oakite164 . ' to ' . $h_oakite164}}">{{$ANClean2->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$ANClean2->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$NiAlClean->RecordName}}</td>
                    <td>{{$NiAlClean->FormName}}</td>

                    {!! $NiAlClean->Value3 < $l_oakite164 || $NiAlClean->Value3 > $h_oakite164 ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_oakite164 . ' to ' . $h_oakite164}}">{{$NiAlClean->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$NiAlClean->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$CrClean1->RecordName}}</td>
                    <td>{{$CrClean1->FormName}}</td>

                    {!! $CrClean1->Value3 < $l_heatbath1448 || $CrClean1->Value3 > $h_heatbath1448 ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_heatbath1448 . ' to ' . $h_heatbath1448}}">{{$CrClean1->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$CrClean1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$NiClean1->RecordName}}</td>
                    <td>{{$NiClean1->FormName}}</td>

                    {!! $NiClean1->Value3 < $l_heatbath1448 || $NiClean1->Value3 > $h_heatbath1448 ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_heatbath1448 . ' to ' . $h_heatbath1448}}">{{$NiClean1->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$NiClean1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$NiClean2->RecordName}}</td>
                    <td>{{$NiClean2->FormName}}</td>

                    {!! $NiClean2->Value3 < $l_heatbath1448 || $NiClean2->Value3 > $h_heatbath1448 ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_heatbath1448 . ' to ' . $h_heatbath1448}}">{{$NiClean2->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$NiClean2->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZincClean1->RecordName}}</td>
                    <td>{{$ZincClean1->FormName}}</td>

                    {!! $ZincClean1->Value3 < $l_heatbath1448 || $ZincClean1->Value3 > $h_heatbath1448 ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_heatbath1448 . ' to ' . $h_heatbath1448}}">{{$ZincClean1->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$ZincClean1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$BLClean1->RecordName}}</td>
                    <td>{{$BLClean1->FormName}}</td>

                    {!! $BLClean1->Value3 < $l_nuvat || $BLClean1->Value3 > $h_nuvat ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_nuvat . ' to ' . $h_nuvat}}">{{$BLClean1->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$BLClean1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$BLClean2->RecordName}}</td>
                    <td>{{$BLClean2->FormName}}</td>

                    {!! $BLClean2->Value3 < $l_nuvat || $BLClean2->Value3 > $h_nuvat ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_nuvat . ' to ' . $h_nuvat}}">{{$BLClean2->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$BLClean2->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EOsoakcleaner->RecordName}}</td>
                    <td>{{$EOsoakcleaner->FormName}}</td>

                    {!! $EOsoakcleaner->Value3 < $l_nuvat || $EOsoakcleaner->Value3 > $h_nuvat ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_nuvat . ' to ' . $h_nuvat}}">{{$EOsoakcleaner->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$EOsoakcleaner->Date->diffForHumans()}}</td>
                </tr>                
            </tbody>   
        </table>
    </div>
</div>
<div class="col-xs-6">
    <div class="table-responsive ">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Zinc</strong></caption>
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Zinc</th><th>Caustic</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$ZN1->RecordName}}</td>
                    <td>{{$ZN1->FormName}}</td>

                    {!! $ZN1->Value2 < $l_zinc_metal || $ZN1->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_metal . ' to ' . $h_zinc_metal}}">{{$ZN1->Value2 . ' oz/gal'}}</span></td>
                    {!! $ZN1->Value3 < $l_zinc_caustic || $ZN1->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_caustic . ' to ' . $h_zinc_caustic}}">{{$ZN1->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$ZN1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZN2->RecordName}}</td>
                    <td>{{$ZN2->FormName }}</td>
                    {!! $ZN2->Value2 < $l_zinc_metal || $ZN2->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_metal . ' to ' . $h_zinc_metal}}">{{$ZN2->Value2 . ' oz/gal'}}</span></td>
                    {!! $ZN2->Value3 < $l_zinc_caustic || $ZN2->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_caustic . ' to ' . $h_zinc_caustic}}">{{$ZN2->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$ZN2->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZN3->RecordName}}</td>
                    <td>{{$ZN3->FormName }}</td>
                   {!! $ZN3->Value2 < $l_zinc_metal || $ZN3->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_metal . ' to ' . $h_zinc_metal}}">{{$ZN3->Value2 . ' oz/gal'}}</span></td>
                    {!! $ZN3->Value3 < $l_zinc_caustic || $ZN3->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_caustic . ' to ' . $h_zinc_caustic}}">{{$ZN3->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$ZN3->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZN5->RecordName}}</td>
                    <td>{{$ZN5->FormName }}</td>
                    {!! $ZN5->Value2 < $l_zinc_metal || $ZN5->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_metal . ' to ' . $h_zinc_metal}}">{{$ZN5->Value2 . ' oz/gal'}}</span></td>
                    {!! $ZN5->Value3 < $l_zinc_caustic || $ZN5->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_caustic . ' to ' . $h_zinc_caustic}}">{{$ZN5->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$ZN5->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZN6->RecordName}}</td>
                    <td>{{$ZN6->FormName }}</td>
                    {!! $ZN6->Value2 < $l_zinc_metal || $ZN6->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_metal . ' to ' . $h_zinc_metal}}">{{$ZN6->Value2 . ' oz/gal'}}</span></td>
                    {!! $ZN6->Value3 < $l_zinc_caustic || $ZN6->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_caustic . ' to ' . $h_zinc_caustic}}">{{$ZN6->Value3 . ' oz/gal'}}</span></td>
                    <td>{{$ZN6->Date->diffForHumans()}}</td>
                </tr>
                                                                         
            </tbody>   
        </table>
    </div>
</div>
<div class="col-xs-6" style="height: 251px">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Anodize</strong></caption>
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Free Acid</th><th>Total Aluminum</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$AN1->RecordName}}</td>
                    <td>{{$AN1->FormName}}</td>

                    {!! $AN1->Value5 < $l_hard_anodize_free_acid || $AN1->Value5 > $h_hard_anodize_free_acid ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_hard_anodize_free_acid . ' to ' . $h_hard_anodize_free_acid}}">{{$AN1->Value5 . ' oz/gal'}}</span></td>
                    {!! $AN1->Value6 < $l_hard_anodize_total_aluminum || $AN1->Value6 > $h_hard_anodize_total_aluminum ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_hard_anodize_total_aluminum . ' to ' . $h_hard_anodize_total_aluminum}}">{{$AN1->Value6 . ' oz/gal'}}</span></td>
                    <td>{{$AN1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$AN2->RecordName}}</td>
                    <td>{{$AN2->FormName}}</td>

                    {!! $AN2->Value5 < $l_anodize_free_acid || $AN2->Value5 > $h_anodize_free_acid ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_anodize_free_acid . ' to ' . $h_anodize_free_acid}}">{{$AN2->Value5 . ' oz/gal'}}</span></td>
                    {!! $AN2->Value6 < $l_anodize_total_aluminum || $AN2->Value6 > $h_anodize_total_aluminum ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_anodize_total_aluminum . ' to ' . $h_anodize_total_aluminum}}">{{$AN2->Value6 . ' oz/gal'}}</span></td>
                    <td>{{$AN2->Date->diffForHumans()}}</td>
                </tr>                                                                         
            </tbody>   
        </table>
    </div>
</div>


<div class="col-xs-6">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Zinc-Nickel</strong></caption>
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>pH</th><th>Zinc Metal</th><th>Nickel Metal</th><th>Total Chloride</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$ZNNI1->RecordName}}</td>
                    <td>{{$ZNNI1->FormName}}</td>
                    {!! $ZNNI1->Value1 < $l_zinc_nickel_pH || $ZNNI1->Value1 > $h_zinc_nickel_pH ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_nickel_pH . ' to ' . $h_zinc_nickel_pH}}">{{$ZNNI1->Value1}}</span></td>
                    {!! $ZNNI1->Value7 < $l_zinc_nickel_zinc_metal || $ZNNI1->Value7 > $h_zinc_nickel_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_nickel_zinc_metal . ' to ' . $h_zinc_nickel_zinc_metal}}">{{$ZNNI1->Value7 . ' oz/gal'}}</span></td>
                    {!! $ZNNI1->Value8 < $l_zinc_nickel_nickel_metal || $ZNNI1->Value8 > $h_zinc_nickel_nickel_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_nickel_nickel_metal . ' to ' . $h_zinc_nickel_nickel_metal}}">{{$ZNNI1->Value8 . ' oz/gal'}}</span></td>
                    {!! $ZNNI1->Value10 < $l_zinc_nickel_total_chloride || $ZNNI1->Value10 > $h_zinc_nickel_total_chloride ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_zinc_nickel_total_chloride . ' to ' . $h_zinc_nickel_total_chloride}}">{{$ZNNI1->Value10 . ' oz/gal'}}</span></td>
                    <td>{{$ZNNI1->Date->diffForHumans()}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="col-xs-6" style="height: 165px">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Hard Chrome</strong></caption>        
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Chrome Metal</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$CR1->RecordName}}</td>
                    <td>{{$CR1->FormName}}</td>
                    {!! $CR1->Value3 < $l_chrome_metal || $CR1->Value3 > $h_chrome_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle="tooltip" title="{{$l_chrome_metal . ' to ' . $h_chrome_metal}}"> {{$CR1->Value3 . 'oz/gal'}}</span></td>
                    <td>{{$CR1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$CR2->RecordName}}</td>
                    <td>{{$CR2->FormName}}</td>
                    {!! $CR2->Value3 < $l_chrome_metal || $CR2->Value3 > $h_chrome_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle="tooltip" title="{{$l_chrome_metal . ' to ' . $h_chrome_metal}}"> {{$CR2->Value3 . 'oz/gal'}}</span></td>
                    <td>{{$CR2->Date->diffForHumans()}}</td>
                </tr>
            </tbody>   
        </table>
    </div>
</div>
<div class="col-xs-6">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Tin Bright</strong></caption>        
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Sulfuric Acid</th><th>Tin Metal</th><th>Stannous Sulfate</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$TinBright->RecordName}}</td>
                    <td>{{$TinBright->FormName}}</td>
                    {!! $TinBright->Value3 < $l_tin_bright_sulfuric_acid || $TinBright->Value3 > $h_tin_bright_sulfuric_acid ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle="tooltip" title="{{$l_tin_bright_sulfuric_acid . ' to ' . $h_tin_bright_sulfuric_acid}}">{{$TinBright->Value3 . 'oz/gal'}}</span></td>
                    {!! $TinBright->Value5 < $l_tin_bright_metal || $TinBright->Value5 > $h_tin_bright_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle="tooltip" title="{{$l_tin_bright_metal . ' to ' . $h_tin_bright_metal}}">{{$TinBright->Value5 . 'oz/gal'}}</span></td>
                    {!! $TinBright->Value6 < $l_tin_bright_stannous_sulfate || $TinBright->Value6 > $h_tin_bright_stannous_sulfate ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle="tooltip" title="{{$l_tin_bright_stannous_sulfate . ' to ' . $h_tin_bright_stannous_sulfate}}"> {{$TinBright->Value6 . 'oz/gal'}}</span></td>
                    <td>{{$TinBright->Date->diffForHumans()}}</td>
                </tr>
            </tbody>   
        </table>
    </div>
</div>
<div class="col-xs-6">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Tin Dull</strong></caption>        
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Free Caustic</th><th>Sodium Stannate</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$TinDull->RecordName}}</td>
                    <td>{{$TinDull->FormName}}</td>
                    {!! $TinDull->Value6 < $l_tin_dull_free_caustic || $TinDull->Value6 > $h_tin_dull_free_caustic ? '<td class="outRange">' : '<td class="inRange">'!!}
                     <span data-toggle="tooltip" title="{{$l_tin_dull_free_caustic . ' to ' . $h_tin_dull_free_caustic}}">{{$TinDull->Value6 . 'oz/gal'}}</span></td>
                    {!! $TinDull->Value5 < $l_tin_dull_sodium_stannate || $TinDull->Value5 > $h_tin_dull_sodium_stannate ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle="tooltip" title="{{$l_tin_dull_sodium_stannate . ' to ' . $h_tin_dull_sodium_stannate}}">{{$TinDull->Value5 . 'oz/gal'}}</span></td>
                    <td>{{$TinBright->Date->diffForHumans()}}</td>
                </tr>
            </tbody>   
        </table>
    </div>
</div>
<div class="col-xs-6">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Cadmium</strong></caption>
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>pH</th><th>Total Cyanide</th><th>Cadmium Metal</th><th>Sodium Hydroxide</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$BigCad->RecordName}}</td>
                    <td>{{$BigCad->FormName}}</td>
                    {!! $BigCad->Value2 < $l_cad_pH || $BigCad->Value2 > $h_cad_pH ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_cad_pH . ' to ' . $h_cad_pH}}">{{$BigCad->Value2}}</span></td>
                    {!! $BigCad->Value4 < $l_cad_total_sodium_cyanide || $BigCad->Value4 > $h_cad_total_sodium_cyanide ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_cad_total_sodium_cyanide . ' to ' . $h_cad_total_sodium_cyanide}}">{{$BigCad->Value4 . ' oz/gal'}}</span></td>
                    {!! $BigCad->Value6 < $l_cad_metal || $BigCad->Value6 > $h_cad_metal ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_cad_metal . ' to ' . $h_cad_metal}}">{{$BigCad->Value6 . ' oz/gal'}}</span></td>
                    {!! $BigCad->Value8 < $l_cad_sodium_hydroxide || $BigCad->Value8 > $h_cad_sodium_hydroxide ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_cad_sodium_hydroxide . ' to ' . $h_cad_sodium_hydroxide}}">{{$BigCad->Value8 . ' oz/gal'}}</span></td>
                    <td>{{$BigCad->Date->diffForHumans()}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="col-xs-6" style="height: 251px">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <caption><strong>Chem Film</strong></caption>
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>pH</th><th>Concentration</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$ChConYl->RecordName}}</td>
                    <td>{{$ChConYl->FormName}}</td>

                    {!! $ChConYl->Value1 < $l_chem_yl_pH || $ChConYl->Value1 > $h_chem_yl_pH ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_chem_yl_pH . ' to ' . $h_chem_yl_pH}}">{{$ChConYl->Value1 }}</span></td>
                    {!! $ChConYl->Value4 < $l_chem_yl_concentration || $ChConYl->Value4 > $h_chem_yl_concentration ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_chem_yl_concentration . ' to ' . $h_chem_yl_concentration}}">{{$ChConYl->Value4 . ' oz/gal'}}</span></td>
                    <td>{{$ChConYl->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ChConTri->RecordName}}</td>
                    <td>{{$ChConTri->FormName}}</td>

                    {!! $ChConTri->Value1 < $l_chem_tri_pH || $ChConTri->Value1 > $h_chem_tri_pH ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_chem_tri_pH . ' to ' . $h_chem_tri_pH}}">{{$ChConTri->Value1 }}</span></td>
                    {!! $ChConTri->Value3 < $l_chem_tri_concentration || $ChConTri->Value3 > $h_chem_tri_concentration ? '<td class="outRange">' : '<td class="inRange">'!!}
                    <span data-toggle='tooltip' title="{{$l_chem_tri_concentration . ' to ' . $h_chem_tri_concentration}}">{{$ChConTri->Value3 . ' %v/v'}}</span></td>
                    <td>{{$ChConTri->Date->diffForHumans()}}</td>
                </tr>                                                                         
            </tbody>   
        </table>
    </div>
</div>


@endsection
@section('before-scripts-end')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
