<?php
    function diasMeses(){
        $retorno = array();
        
        for ($i = 1; $i <= 12; $i ++){
            $retorno[$i] = cal_days_in_month(CAL_GREGORIAN, $i, date('Y'));
        }
        
        return $retorno;

    }

    function montaCalendario(){
        $daysweek = array(
            'Sun',
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat'
        );
        $diasSemana = array(
            'Domingo',
            'Segunda',
            'Terça',
            'Quarta',
            'Quinta',
            'Sexta',
            'Sábado'
        );
        $arrayMes = array(
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro'
        );
        $diasMeses = diasMeses();
        $arrayRetorno = array();

        for ($i =1; $i <= 12; $i++){
            $arrayRetorno[$i] = array();
            for($n=1; $n<= $diasMeses[$i]; $n++){
                $dayMonth = gregoriantojd($i, $n, date('Y'));
                $weekMonth = jddayofweek($dayMonth, 2);
                if($weekMonth == 'Mun') $weekMonth = "Mon";
                $arrayRetorno[$i][$n] = $weekMonth;
            }
        }
        
        echo '<table border="0" width="100%">';
        foreach($arrayMes as $num => $mes){
            echo '<tbody id="fundo" id="mes_'.$num.'" class="mes">';
            echo '<tr><td colspan="7">'.$mes.'</td></tr><tr>';
            foreach($diasSemana as $i => $day){
                echo '<td>'.$day.'</td>';
            }
            echo '</tr><tr>';
            $y = 0;
            foreach($arrayRetorno[$num] as $numero => $dia){
                $y++;
                if($numero == 1){
                    $qtd = array_search($dia, $daysweek);
                    for($i=1; $i<=$qtd; $i++){
                        echo '<td></td>';
                        $y+=1;
                    }
                }
            
                echo '<td>'.$numero.'</td>';
                if($y == 7){
                    $y = 0;
                    echo '</tr><tr>';
                }
            
            }
            echo '</tr></tbody>';

        }
        echo '</table>';
        
        return $arrayRetorno;
    }

?>