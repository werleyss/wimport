<?php
   //$arquivo = $_FILES['arquivo'];
   //var_dump($arquivo);
   $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
   
   if(!empty($arquivo_tmp)){
       $arquivo = new DOMDocument();
       $arquivo->load($arquivo_tmp);
       //print_r($arquivo);
       
       
       
       $linhas = $arquivo->getElementsByTagName('NFe');
       
       //var_dump($linhas);
       $idnfe = $arquivo->getElementsByTagName('ide');
       
       
       $i = 0;
       
       foreach($idnfe as $linha){
           
           $xml[] = $linha->getElementsByTagName("cUF")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("cNF")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("natOp")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("indPag")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("mod")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("serie")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("nNF")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("dhEmi")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("tpNF")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("idDest")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("cMunFG")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("tpImp")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("tpEmis")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("cDV")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("tpAmb")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("finNFe")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("indFinal")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("indPres")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("procEmi")->item(0)->nodeValue;
           $xml[] = $linha->getElementsByTagName("verProc")->item(0)->nodeValue;
           
           
                   
           
           
       }
       
      $emitente = $arquivo->getElementsByTagName('emit');
      
      foreach($emitente as $emit){
          $xml[] = $emit->getElementsByTagName('CNPJ')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('xNome')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('xFant')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('xLgr')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('nro')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('xBairro')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('cMun')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('xMun')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('UF')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('CEP')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('cPais')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('xPais')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('fone')->item(0)->nodeValue;
          //$xml[] = $emit->getElementsByTagName('indIEDest')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('IE')->item(0)->nodeValue;
          //$xml[] = $emit->getElementsByTagName('ISUF')->item(0)->nodeValue;
          $xml[] = $emit->getElementsByTagName('CRT')->item(0)->nodeValue;
          
          
          
      }
      
      $destinatario = $arquivo->getElementsByTagName('dest');
      
      foreach($destinatario as $dest){
          $xml[] = $dest->getElementsByTagName('CNPJ')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('xNome')->item(0)->nodeValue;
          //$xml[] = $dest->getElementsByTagName('xFant')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('xLgr')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('nro')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('xBairro')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('cMun')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('xMun')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('UF')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('CEP')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('cPais')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('xPais')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('fone')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('indIEDest')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('IE')->item(0)->nodeValue;
          $xml[] = $dest->getElementsByTagName('ISUF')->item(0)->nodeValue;
          //$xml[] = $dest->getElementsByTagName('CRT')->item(0)->nodeValue;
          
          
          
      }
       
    $produtos = $arquivo->getElementsByTagName('det');
      
    foreach($produtos as $prod){
          $xml[] = $prod->getElementsByTagName('cProd')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('cEAN')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('xProd')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('NCM')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('CEST')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('CFOP')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('uCom')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('qCom')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vUnCom')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vProd')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('cEANTrib')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('uTrib')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('qTrib')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vUnTrib')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('indTot')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('xPed')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vTotTrib')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('orig')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('CST')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('modBC')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vBC')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('pICMS')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vICMS')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('cEnq')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('CST')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('CST')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vBC')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('pPIS')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vPIS')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('CST')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vBC')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('pCOFINS')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('vCOFINS')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('infAdProd')->item(0)->nodeValue;
          $xml[] = $prod->getElementsByTagName('indTot')->item(0)->nodeValue;
          
          
          
      }
      
      $totais= $arquivo->getElementsByTagName('total');
      
      foreach($totais as $total){
          $xml[] = $total->getElementsByTagName('vBC')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vICMS')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vICMSDeson')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vBCST')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vST')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vProd')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vFrete')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vSeg')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vDesc')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vII')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vIPI')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vPIS')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vCOFINS')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vOutro')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vNF')->item(0)->nodeValue;
          $xml[] = $total->getElementsByTagName('vTotTrib')->item(0)->nodeValue;
          
          
          
          
      }
      $transporte = $arquivo->getElementsByTagName('transp');
      
      foreach($transporte  as $transp){
          $xml[] = $transp->getElementsByTagName('modFrete')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('CNPJ')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('xNome')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('IE')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('xEnder')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('xMun')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('UF')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('qVol')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('esp')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('marca')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('nVol')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('pesoL')->item(0)->nodeValue;
          $xml[] = $transp->getElementsByTagName('pesoB')->item(0)->nodeValue;
          
          
          
      }
      
      $cobranca = $arquivo->getElementsByTagName('cobr');
      
      foreach($cobranca  as $fatura){
          $xml[] = $fatura->getElementsByTagName('nFat')->item(0)->nodeValue;
          $xml[] = $fatura->getElementsByTagName('vOrig')->item(0)->nodeValue;
          $xml[] = $fatura->getElementsByTagName('vLiq')->item(0)->nodeValue;
          $xml[] = $fatura->getElementsByTagName('nDup')->item(0)->nodeValue;
          $xml[] = $fatura->getElementsByTagName('dVenc')->item(0)->nodeValue;
          $xml[] = $fatura->getElementsByTagName('vDup')->item(0)->nodeValue;
              
          
          
      }
      $adicionais =  $arquivo->getElementsByTagName('infAdic');
      
      foreach($adicionais as $adc){
          $xml[] = $adc->getElementsByTagName('infAdFisco')->item(0)->nodeValue;
          $xml[] = $adc->getElementsByTagName('infCpl')->item(0)->nodeValue;
      }
       
       
       $j = 0;
       foreach ($xml as $dado){
           
           echo "XML: ".$xml[$j]."<br>";
          $j++;
           
       }
       
      
       
   }

?>
