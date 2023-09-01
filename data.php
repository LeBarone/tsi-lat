<?php
// Shows in which page each statement belongs to
$pages = array(
    1 => array('s1', 's2', 's3', 's4', 's5', 's6', 's7', 's8'),
    2 => array('s9', 's10', 's11', 's12', 's13', 's14', 's15', 's16'),
    3 => array('s17', 's18', 's19', 's20', 's21', 's22', 's23', 's24'),
    4 => array('s25', 's26', 's27', 's28', 's29', 's30', 's31', 's32'),
    5 => array('s33', 's34', 's35', 's36', 's37', 's38', 's39', 's40'),
    6 => array('s41', 's42', 's43', 's44', 's45', 's46', 's47', 's48'),
    7 => array('s49', 's50', 's51', 's52', 's53', 's54', 's55', 's56'),
    8 => array('s57', 's58', 's59', 's60', 's61', 's62', 's63', 's64', 's65'),
);
// Test satements
$statements = array(
    "s1" => "Es labprātāk risinu problēmas, kas prasa pievērst uzmanību daudzām detaļām.",
    "s2" => "Izsakot idejas, es labprātāk koncentrējos uz vienu ideju, nevis vairākām vienlaikus.",
    "s3" => "Uzsākot kādu uzdevumu, man patīk apspriest idejas ar draugiem vai vienaudžiem.",
    "s4" => "Man patīk noteikt prioritātes darāmajiem darbiem, pirms es sāku tos veikt.",
    "s5" => "Saskaroties ar risināmu problēmu, es izmantoju savas idejas un stratēģijas, lai to atrisinātu.",
    "s6" => "Apspriežot vai aprakstot kādu tēmu, domāju, ka detaļas un fakti ir svarīgāki par kopējo ainu.",
    "s7" => "Es nepievēršu lielu uzmanību detaļām.",
    "s8" => "Man patīk izdomāt problēmas risinājumu, ievērojot konkrētus noteikumus.",
    "s9" => "Man patīk kontrolēt visus projekta posmus, neprasot padomu citiem.",
    "s10" => "Man patīk spēlēties ar savām idejām un redzēt, līdz kam tās nonāk.",
    "s11" => "Lai atrisinātu jebkuru problēmu, es rūpīgi piemeklēju pareizo metodi.",
    "s12" => "Man patīk nodarboties ar uzdevumiem, kurus varu paveikt, sekojot norādījumiem.",
    "s13" => "Es ievēroju vispārpieņemtus noteikumus vai rīcības veidus, kad veicu kādas darbības.",
    "s14" => "Man patīk problēmas, kuru atrisināšanai es varu izmēģināt savu pieeju.",
    "s15" => "Mēģinot pieņemt lēmumu, es paļaujos uz savu spriedumu par situāciju.",
    "s16" => "Es viegli pārslēdzos no viena uzdevuma pie cita, jo visi uzdevumi man šķiet vienlīdz svarīgi.",
    "s17" => "Diskusijās vai rakstu darbos man patīk apvienot savas idejas ar citu idejām.",
    "s18" => "Mani vairāk interesē kopējais rezultāts, nevis izpildāmā uzdevuma detaļas",
    "s19" => "Strādājot pie uzdevuma, es izprotu, kā tā daļas ir saistītas ar uzdevuma vispārējo mērķi.",
    "s20" => "Man patīk situācijas, kurās es varu salīdzināt un izvērtēt dažādus darbības veidus.",
    "s21" => "Strādājot pie projekta, es parasti veicu visdažādākos uzdevumus neatkarīgi no to svarīguma pakāpes projektam.",
    "s22" => "Kad esmu par kaut ko atbildīgs, man patīk pielietot jau agrāk izmantotās metodes un idejas.",
    "s23" => "Man patīk pārbaudīt un izvērtēt pretējus uzskatus vai pretrunīgas idejas.",
    "s24" => "Es labprātāk strādāju pie uzdevumiem, kuri man ļauj iedziļināties detaļās.",
    "s25" => "Risinot sarežģījumus, man ir laba izpratne par to, cik svarīgs ir katrs no tiem un, kādā secībā tos risināt.",
    "s26" => "Man patīk situācijas, kurās varu ievērot noteiktu kārtību.",
    "s27" => "Diskutējot vai aprakstot kādu tēmu, es pieturos pie vienaudžu vai kolēģu atzītiem uzskatiem.",
    "s28" => "Man patīk problēmas un uzdevumi, kuru risināšanā ir jāievēro stingri noteikumi.",
    "s29" => "Es dodu priekšroku darbam pie projekta vai uzdevuma, kas ir atzinīgi novērtēts un pieņemams maniem vienaudžiem.",
    "s30" => "Ja ir veicami vairāki svarīgi darbi, es izdaru tos, kuri ir vissvarīgākie man un maniem kolēģiem.",
    "s31" => "Man ir svarīgi, lai projektam ir skaidra struktūra, noteikts plāns un mērķis.",
    "s32" => "Strādājot pie kāda uzdevuma, man patīk to uzsākt ar savām idejām.",
    "s33" => "Ja ir daudz darāmā, man ir skaidrs, kādā secībā veikt uzdevumus.",
    "s34" => "Man patīk iesaistīties aktivitātēs, kurās varu sadarboties ar citiem kā daļa no komandas.",
    "s35" => "Es mēdzu risināt vairākas problēmas vienlaikus, jo bieži vien tās ir vienlīdz steidzamas.",
    "s36" => "Saskaroties ar problēmu, man patīk to risināt ierastā veidā.",
    "s37" => "Pie uzdevuma vai problēmas risināšanas man patīk strādāt vienatnē.",
    "s38" => "Man ir tendence uzsvērt problēmas vai uzdevuma galvenos aspektus un koncentrēties uz iznākumu.",
    "s39" => "Risinot problēmu vai veicot kādu uzdevumu, man patīk ievērot konkrētus noteikumus vai norādījumus.",
    "s40" => "Es pievēršu vienlīdz daudz uzmanības visiem uzdevumiem, kuros esmu iesaistīts.",
    "s41" => "Strādājot pie kāda projekta, man patīk apmainīties ar idejām un saņemt citu cilvēku ieteikumus.",
    "s42" => "Man patīk projekti, kuros varu izpētīt un salīdzināt dažādus uzskatus vai idejas.",
    "s43" => "Man ir raksturīgi pievērst visu uzmanību tikai kaut kam vienam.",
    "s44" => "Man patīk risināt problēmas, kurās jāpievērš uzmanība detaļām.",
    "s45" => "Man patīk apstrīdēt novecojušas idejas vai darbības veidus un meklēt labākus.",
    "s46" => "Man patīk situācijas, kurās es sadarbojos ar citiem un visi strādā kopā.",
    "s47" => "Es bieži pamanu, ka tad, kad nodarbojos ar vienas problēmas risināšanu, parādās cita, kas ir tikpat svarīga.",
    "s48" => "Man patīk strādāt pie projektiem, kuros tiek risināti vispārīgi jautājumi, nevis sīkumi.",
    "s49" => "Man patīk situācijas, kurās es varu pielietot savas idejas un darbības veidus.",
    "s50" => "Ja ir jādara vairāki svarīgi darbi, es koncentrējos uz vienu, kas man ir vissvarīgākais un pārējos atstāju novārtā.",
    "s51" => "Es dodu priekšroku uzdevumiem vai problēmām, kurās varu novērtēt citu izstrādātos projektus vai risinājumus.",
    "s52" => "Ja jādara vairāki svarīgi darbi, es izvēlos tos, kuri ir vissvarīgākie maniem draugiem un kolēģiem.",
    "s53" => "Saskaroties ar problēmu, es izvēlos izmēģināt jaunas stratēģijas vai metodes, lai to atrisinātu.",
    "s54" => "Man patīk koncentrēties uz vienu uzdevumu vienlaikus.",
    "s55" => "Man patīk projekti, kurus es varu paveikt patstāvīgi.",
    "s56" => "Uzsākot kaut ko darīt, man patīk sastādīt veicamo darbu sarakstu un sakārtot tos pēc svarīguma.",
    "s57" => "Man patīk veikt darbu, kas ietver analīzi, vērtēšanu vai salīdzināšanu.",
    "s58" => "Man patīk rīkoties jaunā veidā, ko citi iepriekš nav pielietojuši.",
    "s59" => "Uzsākot darba vai projekta īstenošanu, es koncentrējos uz tām daļām, kas visvairāk attiecas uz manu vienaudžu grupu.",
    "s60" => "Man ir jāpabeidz viens projekts, pirms uzsākt citu.",
    "s61" => "Pārrunājot vai pierakstot idejas, man patīk atspoguļot savu domu vērienu, būtību un kopskatu.",
    "s62" => "Es vairāk uzmanības pievēršu uzdevuma atsevišķām daļām, nevis tā galarezultātam vai nozīmīgumam.",
    "s63" => "Es dodu priekšroku situācijām, kurās varu īstenot savas idejas, nepaļaujoties uz citiem.",
    "s64" => "Man patīk mainīt ierasto kārtību, lai uzlabotu uzdevumu izpildes gaitu.",
    "s65" => "Man patīk risināt senas, neatrisinātas problēmas un atrast jaunus veidus, kā tās atrisināt."
);
// Thinking style (short) descriptions
$descriptions = array(
    "legislative" => "Attiecībā uz darāmajiem darbiem Tev atbilst Likumdevēja stils. Likumdevējs dod priekšroku uzdevumiem, kuru izpildei nepieciešamas radošas stratēģijas. Cilvēks ar šo domāšanas stilu pats izvēlas savus uzdevumus un viņu piesaista izaicinājumi, kas nav skaidri definēti un, kuros pats var izlemt, kā rīkoties.",
    "executive" => "Attiecībā uz darāmajiem darbiem Tev atbilst Izpildītāja stils. Izpildītājs dod priekšroku darbam ar uzdevumiem, kuriem ir skaidra uzbūve, norādījumi un noteiktas vadlīnijas. Šī stila pārstāvji labprāt īsteno idejas, ko piedāvā citi. Izpildītājiem patīk ievērot likumus. Tāpat viņi tiecas ievērot noteiktus protokolus, dod priekšroku labi definētām problēmām un to risināšanas veidu izvēlas no jau zināmām metodēm.",
    "judicial" => "Attiecībā uz darāmajiem darbiem Tev atbilst Tiesneša stils. Tiesnesis dod priekšroku darbam ar uzdevumiem, kas ļauj novērtēt un spriest par citu cilvēku darba rezultātu. Tiesnešiem patīk izvērtēt noteikumus vai likumus un pārbaudīt, vai tie tiek izpildīti korekti. Cilvēku ar šo stilu raksturo sistemātiska domāšana, objektivitāte, taisnīgums un pierādījumu izvērtēšana pirms lēmumu pieņemšanas. ",
    "global" => "Risinot uzdevumus, Tu koncentrējies uz vispārējām kategorijām, tādējādi esi Globālā stila pārstāvis. Globālists pievērš uzmanību “lielajai bildei” un saskata uzdevumu jēgu un būtību. Cilvēks ar šo domāšanas stilu izvēlas liela mēroga un abstraktu problēmu risināšanu, labprātāk saskata kopainu, nevis iegrimst detaļās. Globālistiem patīk izstrādāt koncepcijas un strādāt ar idejām. Viņi mēdz būt ar abstraktu domāšanu, izklaidīgi, ar tieksmi uz sapņošanu. Reizēm Globālists var nepamanīt sīkākas detaļas un apmaldīties savā abstraktajā domāšanā.",
    "local" => "Risinot uzdevumus, Tu koncentrējies uz detaļām, tādējādi esi Lokālā stila pārstāvis. Lokālists koncentrējas uz uzdevumiem, kuros nepieciešams strādāt ar konkrētām detaļām. Tāpat Lokālistam patīk risināt konkrētas problēmas un fokusēties uz situācijas praktisko pusi. Dažkārt Lokālā stila pārstāvjiem, iegrimstot detaļās, var būt grūti saskatīt kopējo ainu, taču gandrīz jebkurā komandā nepieciešami Lokālā tipa cilvēki.",
    "liberal" => "Attieksmē pret uzdevumu uzbūvi Tev raksturīgs Liberālais stils, tāpēc Tu jūties ērti uzdevumos, kas saistīti ar kaut ko jaunu un neskaidru. Liberāļiem patīk aizrautība un lielas pārmaiņas un šī stila pārstāvji ierasti meklē situācijas, kuras ir kaut kādā mērā neskaidras un nezināmas. Liberālajam stilam raksturīga tieksme apstrīdēt vispārpieņemtos noteikumus, veicināt pārmaiņas un pieņemt nenoteiktību.",
    "conservative" => "Attieksmē pret uzdevumu uzbūvi Tev raksturīgs Konservatīvais stils, tāpēc Tu dod priekšroku uzdevumiem, kuros ir skaidri saprotami nosacījumi. Konservatīvā stila pārstāvji mēdz izvairīties no neskaidrām situācijām un cenšas pieturēties pie pazīstamā gan ikdienā, gan profesionālajā jomā. Vislaimīgākie šie cilvēki ir tad, kad atrodas strukturētā un relatīvi prognozējamā vidē. Ja šāda skaidra struktūra neeksistē, tad Konservatīvā stila pārstāvis centīsies tādu radīt.",
    "hierarchical" => "Tavs uzdevumu izpildes veids atbilst Strukturētāja stilam. Cilvēkiem ar šo domāšanas stilu patīk veikt darāmos darbus prioritārā secībā, atbilstoši uzdevumu nozīmīgumam. Strukturētājs labprāt darbojas ar sarežģītām struktūrām, veido mērķu un darbu prioritāšu sarakstus, problēmas risina, paturot prātā visus darāmos darbus. Strukturētāji saglabā līdzsvarotu pieeju problēmu risināšanai un uzskata, ka mērķis ne vienmēr attaisno līdzekļus.",
    "monarchic" => "Tavs uzdevumu izpildes veids atbilst Valdnieka stilam. Valdniekam patīk pilnībā koncentrēties uz vienu darbību, aizrauties un iegrimt vienā darāmajā darbā. Valdnieks ir apņēmīgs, risinot tās problēmas, kas saistītas ar vienu esošo uzdevumu, pirms domā par nākamo. Cilvēki ar šo domāšanas stilu ir mērķtiecīgi, nekam neļauj radīt šķēršļus ceļā uz problēmu risinājumu. Uz viņiem var paļauties, ka problēma tiks atrisināta, jo viņi sevi tā ir noskaņojuši.",
    "oligarchic" => "Tavs uzdevumu izpildes veids atbilst Oligarha stilam. Oligarhiem patīk strādāt ar vairākiem uzdevumiem vienlaikus, virzoties uz dažādiem mērķiem un nenosakot prioritātes, tādējādi paredzot visu uzdevumu izpildei līdzīgu laika periodu. Oligarhu motivē vairāki, bieži vien savā starpā konkurējoši mērķi, kuriem visiem viņš piešķir līdzvērtīgu svarīgumu. Nereti cilvēki ar šo domāšanas stilu izjūt laika un citu resursu spiedienu konkurējošu prasību priekšā.",
    "anarchic" => "Tavs uzdevumu izpildes veids atbilst Anarhista stilam. Anarhistiem patīk uzdevumi, kas nodrošina darbu dažādību, tā, lai ir iespēja izvēlēties, kas, kur, kad un kā strādāt. Anarhisti uzdevumus risina pēc nejaušības principa, mēdz pretoties jebkādai, viņuprāt, ierobežojošai sistēmai. Cilvēkus ar Anarhista domāšanas stilu motivē dažādu vajadzību un mērķu sajukums, kurus bieži vien ir grūti izprast gan pašam, gan citiem. Viņi izmanto neparedzamu pieeju problēmu risināšanā, un viņus bieži ietekmē šķietami nesakarīgi un neizskaidrojami apstākļi, bez skaidra un loģiska domāšanas procesa, kas būtu viņu rīcības pamatā.",
    "internal" => "Pildot darba uzdevumus, Tu labprātāk darbojies vienatnē, tāpēc Tev piemīt Internālais jeb iekšēji vērstais stils. Šī stila pārstāvji izvēlas uzdevumus, kas ļauj viņiem strādāt neatkarīgi no citiem. Internāļiem patīk darbs vienatnē. Viņi labprātāk pielieto savu intelektu ideju ģenerēšanai, kad ir distancējušies no citiem cilvēkiem. Internālo problēmu jēdziens attiecas uz tādiem uzdevumiem, kas saistīti ar sava intelekta patstāvīgu izmantošanu, neiesaistot citus. Piemēram, analītisku problēmu risināšana, kompozīcija, mākslas un amatniecības darbu veidošana vai darbs ar iekārtām. Šie uzdevumi ir vērsti tikai uz objektiem vai idejām, maz ņemot vērā sociālo mijiedarbību vai komandas darbu.",
    "external" => "Pildot darba uzdevumus, Tu labprātāk darbojies komandā, tāpēc Tev piemīt Eksternālais jeb ārēji vērstais stils. Eksternālā stila pārstāvji izvēlas tādus uzdevumus, kas ļauj sadarboties ar citiem cilvēkiem. Eksternāļi jutīgi reaģē sarežģītās sociālās situācijās un ļoti labi apzinās un izjūt apkārt notiekošo. Lai risinātu eksternālas problēmas, cilvēkam ir jāpielieto intelekts ārējās pasaules kontekstā, kas ietver gan citus cilvēkus, gan viņu pašu. Tas nozīmē, ka šāda veida problēmas parasti ir saistītas ar mijiedarbību ar citiem cilvēkiem un prasa sadarbību, lai rastu risinājumu."
);
// Statement option labels
$opt_1 = "Nepavisam neatbilst";
$opt_2 = "Ne pārāk atbilst";
$opt_3 = "Mazliet atbilst";
$opt_4 = "Daļēji atbilst";
$opt_5 = "Labi atbilst";
$opt_6 = "Ļoti labi atbilst";
$opt_7 = "Pilnīgi atbilst";
// Style translations
$translations = array(
    "legislative" => "Likumdevējs",
    "executive" => "Izpildītājs",
    "judicial" => "Tiesnesis",
    "global" => "Globālais",
    "local" => "Lokālais",
    "liberal" => "Liberālais",
    "conservative" => "Konservatīvais",
    "hierarchical" => "Strukturētājs",
    "monarchic" => "Valdnieks",
    "oligarchic" => "Oligarhs",
    "anarchic" => "Anarhists",
    "internal" => "Internālais",
    "external" => "Eksternālais",
    "functions" => "Funkcija",
    "level" => "Līmenis",
    "orientation" => "Orientācija",
    "forms" => "Forma",
    "fields" => "Sfēra"
);
// Style levels with descriptions
$levels = array(
    "very_high" => "<span class='m0'>Atbilstība domāšanas stilam: <b>ļoti augsta</b></span>Tas nozīmē, ka Tev atbilst visas vai gandrīz visas šī domāšanas stila iezīmes.",
    "high" => "<span class='m0'>Atbilstība domāšanas stilam: <b>augsta</b></span> Tas nozīmē, ka Tev atbilst liela daļa no šī domāšanas stila iezīmēm.",
    "somewhat_high" => "<span class='m0'>Atbilstība domāšanas stilam: <b>vidēji augsta</b></span> Tas nozīmē, ka Tev piemīt vismaz dažas no šī domāšanas stila iezīmēm.",
    "somewhat_low" => "<span class='m0'>Šis domāšanas stils nav tas, kuram Jūs parasti dodat priekšroku, lai arī tas var izpausties dažās situācijās.</span>",
    "low" => "<span class='m0'>Šis domāšanas stils nav tas, kuram Jūs parasti dodat priekšroku, lai arī tas var izpausties dažās situācijās.</span>",
    "very_low" => "<span class='m0'>Šis domāšanas stils nav tas, kuram Jūs parasti dodat priekšroku, lai arī tas var izpausties dažās situācijās.</span>"
);
// Order in which order results
$levelOrder = [
    "very_high" => 3,
    "high" => 2,
    "somewhat_high" => 1
];
// Ranges of results for each thinking syle
$ranges = [
    "legislative" => ['very_high' => [6,7],'high' => [5.2,5.9],'somewhat_high' => [4.4,5.1],'somewhat_low' => [3.6,4.3],'low' => [3,3.5],'very_low' => [1,2.9]],
    "executive" => ['very_high' => [6,7],'high' => [5.4,5.9],'somewhat_high' => [4.6,5.3],'somewhat_low' => [3.8,4.5],'low' => [3.2,3.7],'very_low' => [1,3.1]],
    "judicial" => ['very_high' => [5.4,7],'high' => [4.8,5.3],'somewhat_high' => [4,4.7],'somewhat_low' => [3.4,3.9],'low' => [2.6,3.3],'very_low' => [1,2.5]],
    "global" => ['very_high' => [5,7],'high' => [4.4,4.9],'somewhat_high' => [3.8,4.3],'somewhat_low' => [3.2,3.7],'low' => [2.8,3.1],'very_low' => [1,2.7]],
    "local" => ['very_high' => [5.2,7],'high' => [4.4,5.1],'somewhat_high' => [3.8,4.3],'somewhat_low' => [3.2,3.7],'low' => [2.6,3.1],'very_low' => [1,2.5]],
    "liberal" => ['very_high' => [5.6,7],'high' => [4.6,5.5],'somewhat_high' => [3.8,4.5],'somewhat_low' => [3,3.7],'low' => [2.4,2.9],'very_low' => [1,2.3]],
    "conservative" => ['very_high' => [5.8,7],'high' => [5,5.7],'somewhat_high' => [4,4.9],'somewhat_low' => [3.4,3.9],'low' => [3,3.3],'very_low' => [1,2.9]],
    "hierarchical" => ['very_high' => [6,7],'high' => [5.2,5.9],'somewhat_high' => [4.4,5.1],'somewhat_low' => [3.6,4.3],'low' => [3,3.5],'very_low' => [1,2.9]],
    "monarchic" => ['very_high' => [5.4,7],'high' => [4.6,5.3],'somewhat_high' => [3.8,4.5],'somewhat_low' => [3,3.7],'low' => [2.6,2.9],'very_low' => [1,2.5]],
    "oligarchic" => ['very_high' => [5.2,7],'high' => [4.4,5.1],'somewhat_high' => [3.8,4.3],'somewhat_low' => [3.2,3.7],'low' => [2.7,3.1],'very_low' => [1,2.6]],
    "anarchic" => ['very_high' => [5.4,7],'high' => [4.6,5.3],'somewhat_high' => [4,4.5],'somewhat_low' => [3.2,3.9],'low' => [2.8,3.1],'very_low' => [1,2.7]],
    "internal" => ['very_high' => [5.8,7],'high' => [5,5.7],'somewhat_high' => [4.2,4.9],'somewhat_low' => [3.4,4.1],'low' => [2.8,3.3],'very_low' => [1,2.7]],
    "external" => ['very_high' => [5.8,7],'high' => [5,5.7],'somewhat_high' => [4,4.9],'somewhat_low' => [3.2,3.9],'low' => [2.6,3.1],'very_low' => [1,2.5]]
];
// Thinking style (long) descriptions
$long_descriptions = array(
    'legislative' => 'Likumdevēja domāšanas stils piemīt cilvēkiem, kuri ar prieku rada un izstrādā problēmu risināšanas stratēģijas, uzsāk iniciatīvas, izdod likumus, iesaistās un veido politiku. Viņiem ir dabiska tieksme uz likumdošanas darbu. Šiem cilvēkiem patīk pašiem izdomāt, ko darīt un radīt savu veidu, kā kaut ko darīt.</p><p>
    Likumdevējam patīk pašam veidot noteikumus, viņš dod priekšroku rīkoties pēc saviem ieskatiem, viņu piesaista izaicinājumi, kas nav skaidri definēti vai iepriekš sagatavoti risināšanai – Likumdevējiem patīk radīt gan problēmu risināšanas pieeju struktūru, gan saturu.</p><p>
    Likumdevēji dod priekšroku izdomas bagātām un produktīvām, uz plānošanu orientētām darbībām, piemēram, radošai rakstīšanai, projektēšanai un jaunu uzņēmējdarbības veidu vai izglītības programmu attīstīšanai. Viņi izvēlas profesijas, kurās viņi paši nosaka sev noteikumus un, kurās ļauts izmantot viņu radošo stilu un idejas, piemēram, rakstnieka, zinātnieka, mākslinieka, tēlnieka, investīciju baņķiera, politikas veidotāja vai arhitekta darbu.</p><p>
    Šis domāšanas stils ir saistīts ar radošumu, jo radoši cilvēki ne tikai nāk klajā ar jaunām idejām, bet viņiem ir nepieciešamība tādas radīt. Likumdevējiem mēdz būt grūti mācīties formulas un faktus, grafikus. Piemēram, viņi būtu izcili zinātnieki, ja zinātni mācītu kā radošo ideju izpildi – zinātniekiem gandrīz nekad nav jāzina no galvas formulas vai grafiki. Ja viņi kaut ko nezina, visu var sameklēt internetā,  grāmatās vai citos resursos. Tas pats ir ar radošo rakstīšanu – bērniem literatūrā nemāca radoši rakstīt, bet gan iegaumēt tēlus, notikumu secību un tamlīdzīgi – Likumdevējiem šāda kārtība nav dabiska, tomēr to var uztrenēt.</p><p>
    Bērniem–Likumdevējiem laiku pa laikam ir jāatgādina, ka nedz viņi, nedz citi nevar nepārtraukti būt Likumdevēji. Likumdevēji–studenti tiecas nepārtraukti kritizēt mācības tikai kritizēšanas pēc. Viņi nevēlas darīt to, ko liek citi, tāpēc ik pa laikam ir jāatgādina, ka neviena sistēma nespēj funkcionēt bez noteikumiem un procedūrām, pat ja tās nav optimālas.</p><p>
    Likumdevējiem patīk radošumā, iespēju pilnveidošanā, produktivitātē un ideju ģenerēšanā balstītas aktivitātes. Stīvs Džobss (Apple Inc. līdzdibinātājs) bija izteikts Likumdevēja domāšanas stila piemērs. Taču, šāda līmeņa kompānijām parasti nepieciešams stabilāks un vairāk nostiprinājies vadītājs, un tādā gadījumā Likumdevēji parasti nav tie piemērotākie šim amatam. Tāpēc parasti šādos uzņēmumos parādās citi vadītāji, kā tas notika ar Apple – jo Likumdevējs var palaist garām brīdi, kad viņa domāšanas stila fokuss ir jāmaina no radošuma uz tādu kā stabilitātes uzturētāju.
    ',
    'executive' => 'Izpildītāja domāšanas stils attiecas uz cilvēkiem, kuri ir orientēti uz rezultātu īstenošanu un problēmu praktisku risināšanu. Viņi izpilda iniciatīvas, politiku un likumus, kurus izdod Likumdevējs (cita domāšanas stila pārstāvis). Izpildītājiem patīk ievērot likumus, viņi tiecas ievērot noteiktus protokolus, dod priekšroku labi definētām problēmām un to risināšanas veidu izvēlas no jau esošajām metodēm. Izpildītājam patīk aizpildīt “tukšos laukus” ar jau esošām struktūrām, nevis šīs struktūras radīt.</p><p>
    Izpildītājiem patīk strādāt saskaņā ar jau pastāvošām struktūrām un viņi dod priekšroku precīzi noteiktām darbībām, piemēram, algebras problēmu atrisināšanai, noteikumu piemērošanai, strukturētām inženiertehniskajām problēmām. Izpildītājs spēj problēmām iedot ietvaru jeb rāmi, labi pasniegt citu cilvēku idejas un ieviest likumus un bez grūtībām tiek galā ar birokrātiskiem pienākumiem.</p><p>
    Izpildītāji mēdz dot priekšroku tādām profesijām, kurās nepieciešams sekot iepriekš noteiktai kārtībai. Piemēram – juristi, policisti, iepriekš izstrādātu projektu būvnieki, ķirurgi, karavīri, jau pastāvošu sistēmu attīstītāji, citu cilvēku ideju sludinātāji, administratīvie asistenti un zemāka līmeņa vadītāji.</p><p>
    Izpildītāja domāšanas stils tiek atzīts skolās un biznesā, jo skolēniem un darbiniekiem jāpilda to, kas no viņiem tiek prasīts. Izpildītāji vērtē sevi pēc tiem pašiem principiem, kā viņus vērtē organizācija – cik labi viņi dara to, kas no viņiem tiek prasīts. Izpildītājiem ir viegli iekļauties organizācijās, kas vēlas, lai cilvēki darītu savu darbu tā, lai tiktu stingri ievēroti noteikumi vai vadlīnijas.</p><p>
    Arī biznesa vidē no zemākā līmeņa vadītājiem tiek sagaidīts izpildītāja stils – darīt to, ko no viņiem prasa un prasīto izdarīt labi. Cilvēki, kuri to spēj un, kuriem šis stils piemīt, tiek paaugstināti amatā, taču problēma tāda, ka augstākos amatos tiek prasīts Tiesneša vai Likumdevēja domāšanas stils.
    ',
    'judicial' => 'Tiesneša domāšanas stils ir saistīts ar vērtēšanu un analīzi. Tiesneši rūpīgi pārbauda noteikumus un procedūras, izvērtē vai likumi tiek izpildīti korekti, vai tie netiek pārkāpti. Tiesnesis novērtē jau pastāvošas struktūras un dod priekšroku tādu problēmu risināšanai, kas saistītas ar esošu konceptu un objektu analīzi.</p><p>
    Tiesneši izvērtē gan problēmu struktūru, gan saturu, un aktīvi iesaistās vērtējošās darbībās. Tiesnesim patīk tādās aktivitātes kā kritiku rakstīšana, sava viedokļa paušana, citu cilvēku un viņa darba izvērtēšana, strīdīgu vai pretrunīgu situāciju izvērtēšana. Šis domāšanas stils ir izplatīts profesijās, kurās ir būtiski veikt dažādas analītiskas un novērtēšanas aktivitātes.</p><p>
    Tiesnesi raksturo objektivitāte, taisnīgums un pierādījumu izvērtēšana pirms lēmumu pieņemšanas. Cilvēki ar Tiesneša domāšanas stilu ir metodiski un sistemātiski savā domāšanas procesā. Viņus maz ietekmē emocijas un personiskie aizspriedumi, viņi koncentrējas uz taisnīguma un objektivitātes saglabāšanu savos spriedumos.</p><p>
    Tiesneši rūpīgi analizē informāciju, apsver dažādus skatu punktus un viedokļus, pirms nonāk pie secinājumiem. Tādējādi viņi ir vērtīgi dalībnieki situācijās, kurās nepieciešams objektīvs spriedums.</p><p>
    Tiesneša domāšanas stilu raksturo tādas profesijas kā tiesnesis, kritiķis, diplomāts, jurists, programmu vērtētājs, uzņemšanas komisiju darbinieki, dotāciju vai līgumu uzraugi, sistēmu analītiķi un konsultanti.'
    ,
    'global' => 'Personas, kurām ir Globāls domāšanas stils, dod priekšroku plašu un abstraktu jautājumu risināšanai, bieži vien atstājot novārtā detaļas. Globālistiem patīk izstrādāt koncepcijas un strādāt ar idejām, viņi mēdz būt ar abstraktu domāšanu, izklaidīgi, ar tieksmi uz sapņošanu. Viņi var nepamanīt sīkākas detaļas un apmaldīties savā abstraktajā domāšanā.</p><p>
    Cilvēki ar šādu domāšanas stilu dod priekšroku darbam ar problēmām, kuras ir liela mēroga un abstraktas. Tēlaini izsakoties, viņi labprātāk saskata mežu, nevis kokus. Dažkārt Globālisti mēdz neredzēt kokus, kuri veido mežu un, ja tā notiek, ir svarīgi šajā mežā neapmaldīties. Tas nozīmē, ka ir situācijas, kad Globālā stila pārstāvim jāspēj pievērsties arī risināmās problēmas detaļām (jeb Lokālām problēmām), nevis tikai jautājumu svarīgākajiem aspektiem vai rezultātam kopumā.</p><p>
    Globālais līmenis domāšanā attiecas uz tendenci pievērsties vispārīgām un abstraktām problēmām, piemēram, politikas jautājumiem, dažādu rakstu virsrakstiem, neiedziļinoties saturā. Tāpat Globālisti var būt talantīgi plānojot reklāmas kampaņas vai tamlīdzīgas aktivitātes.</p><p>
    Globālists dod priekšroku uzdevumiem, kuri prasa globālu apstrādi un ietver, piemēram, kādas vispārējas kārtības formulēšanu, jaunu uzņēmējdarbības produktu izstrādi vai politisko kampaņu veidošanu. Tāpat Globālistam patiks arī plaša mēroga teorētisku formulējumu izstrāde un tamlīdzīgu uzdevumu veikšana.</p><p>
    Globālisti un Lokālisti savā starpā spēj labi sadarboties, jo katrs pievērš uzmanību citam aspektam, lai problēma tiktu atrisināta un darbs paveikts. Cilvēki ar ļoti izteiktu Lokālista vai Globālista domāšanas stilu var aizrauties un pazaudēt skatījumu vai nu uz pašu “lielo” problēmu vai tās detaļām.
    ',
    'local' => 'Cilvēkiem ar Lokālo domāšanas stilu patīk risināt konkrētas problēmas, strādāt pie detaļām. Lokālā stila pārstāvji ir piezemēti, fokusēti uz situācijas pragmatisko pusi – tas nozīmē, ka viņiem piemīt lietišķa pieeja problēmu risināšanā, spriedumu un rīcības konkrētība; prasme veiksmīgi risināt sadzīves jautājumus.</p><p>
    Šī domāšanas stila pārstāvjiem var būt grūti saskatīt kopainu jeb “lielo bildi”. Tēlaini izsakoties, pastāv risks, ka Lokālists starp kokiem pazaudēs mežu. Taču vislielākās nelaimes, piemēram, aviācijā un raķešu zinātnē ir notikušas, kad cilvēki ignorē šķietami nebūtiskas detaļas. Tieši tāpēc gandrīz jebkurā komandā nepieciešami Lokālā tipa cilvēki. Tomēr jāpiebilst, ka mēdz būt situācijas, kad Lokālā stila pārstāvim jāspēj pievērsties arī risināmās problēmas kopskatam. Tas nozīmē, ka arī Lokālists spēj paraudzīties uz problēmām Globāli, nevis pievērsties tikai detaļām.</p><p>
    Lokālās problēmas attiecas uz jautājumiem, kas saistīti ar konkrētām detaļām, piemēram, eksperimentu īstenošanu vai koncepcijas izstrādi, reklāmas kampaņas organizēšanu vai matemātisku problēmu risināšanu. Daži lokālo problēmu piemēri ir nodokļu nomaksas grafika sagatavošana, likumu vai kodeksu izstrāde, konferenču organizēšana vai detalizēta mācību norises kārtības plānošana.</p><p>
    Salīdzinot domāšanas stila līmeni ar citām dimensijām, ir gadījumi, kad daži Izpildītāju tipa pārstāvji var koncentrēties uz plašāka mēroga uzdevumiem un deleģēt smalkākas detaļas citiem. Savukārt, Likumdevēja vai Tiesneša domāšanas stilu pārstāvji arī var dot priekšroku lokāliem jautājumiem.</p><p>
    Runājot par profesijām, zinātnē pētnieki var ģenerēt idejas eksperimentiem bez skaidras izpratnes par plašāku kontekstu vai arī koncentrēties uz šaurāku pētāmā fenomena atspoguļojumu.</p><p>
    Globālisti un Lokālisti savā starpā spēj labi sadarboties, jo katrs pievērš uzmanību citam aspektam, lai problēma tiktu atrisināta un darbs paveikts. Cilvēki ar ļoti izteiktu Lokālista vai Globālista domāšanas stilu var aizrauties un pazaudēt skatījumu vai nu uz pašu “lielo” problēmu vai tās detaļām.
    ',
    'liberal' => 'Cilvēkiem ar Liberālo domāšanas stilu patīk sniegties aiz pastāvošās iekārtas un procesiem, lai radītu lielas pārmaiņas. Viņiem patīk risināt problēmas, kuras ir kaut kādā mērā neskaidras.</p><p>
    Liberālajam stilam raksturīga tieksme apstrīdēt vispārpieņemtos noteikumus, veicināt pārmaiņas un pieņemt nenoteiktību. Šī stila pārstāvjus piesaista jauninājumi un aizrautība, tāpat viņi kopumā ātri kļūst garlaikoti.</p><p>
    Liberāls domāšanas stils nenozīmē politiski liberālu. Arī politiski konservatīvam cilvēkam var būt liberāls stils veidā, kādā viņš cenšas ieviest savas politiskās partijas darba kārtību jaunā, visaptverošā veidā.</p><p>
    ',
    'conservative' => 'Cilvēkiem ar Konservatīvo domāšanas stilu patīk sekot jau pastāvošiem noteikumiem un procedūrām, līdz minimumam samazināt pārmaiņas. Viņiem patīk iespēju robežās izvairīties no neskaidrām situācijām un pieturēties pie pazīstamā ikdienā un profesionālajā dzīvē. Vislaimīgākie šie cilvēki ir tad, kad atrodas strukturētā un relatīvi prognozējamā vidē. Ja šāda struktūra neeksistē, tad viņi cenšas tādu radīt.</p><p>
    Ir būtiski nošķirt stilistiskās preferences un politiskos uzskatus, jo tie ne vienmēr ir saistīti – ja cilvēks ir ar konservatīvu domāšanu, tas nenozīmē, ka šī domāšana ir politiski konservatīva. </p><p>
    ',
    'hierarchical' => 'Strukturētāja domāšanas stils ir raksturīgs cilvēkiem, kuri dod priekšroku hierarhijai problēmu risināšanā. Šādi cilvēki vadās pēc mērķu hierarhijas, atzīstot, ka daži mērķi ir svarīgāki par citiem un tos nevar sasniegt vienādā mērā, ir jānosaka prioritātes. Strukturētāji saglabā līdzsvarotu pieeju problēmu risināšanai un uzskata, ka mērķis ne vienmēr attaisno līdzekļus.</p><p>
    Lai gan cilvēki ar Strukturētāja domāšanas stilu pieņem konkurējošus jeb vienlīdz svarīgus mērķus kā derīgus, viņiem var rasties grūtības, ja prioritātes ir pārāk līdzvērtīgas, lai veidotu skaidru hierarhiju. Viņi aktīvi meklē sarežģītību un demonstrē pašapziņu, iecietību un elastību.</p><p>
    Cilvēkiem ar šo domāšanas stilu ir skaidri noteiktas prioritātes un viņi bieži spēj ātri pieņemt lēmumus. Tomēr dažkārt viņiem var rasties grūtības, ja prioritāšu noteikšana ir svarīgāka par faktisko lēmumu pieņemšanu vai īstenošanu. Šīs personas izmanto sistemātisku pieeju problēmu risināšanai un lēmumu pieņemšanai.</p><p>
    Hierarhiskas problēmas prasa dažādu mērķu sasniegšanu, katram no tiem piešķirot atšķirīgu nozīmības vai prioritātes pakāpi. Šādu problēmu piemēri ir lēmumu pieņemšana saistībā ar karjeras izvēli, izglītības iestādes vai darbavietas izvēli, dzīves partnera atrašanu un darbību plānošanu. Šie cilvēki sarežģītību panes labāk nekā Valdnieki un saprot, ka problēmām jāpieiet no dažādiem skatupunktiem, lai noteiktu prioritātes.</p><p>
    Strukturētāji labi iekļaujas organizācijās, jo viņi atpazīst savu vajadzību noteikt prioritātes. Taču, ja viņu prioritātes atšķiras no organizācijas prioritātēm, tad rodas problēmas – viņi organizē darbu pēc savām, nevis organizācijas prioritātēm. Piemēram, advokāts, kurš vēlas veltīt daudz laika neapmaksātam labdarības darbam, universitātes profesors, kurš vēlas veltīt daudz laika pasniegšanai un pavārs, kurš velta pārāk daudz laika perfektās maltītes sagatavošanai, var nonākt pie secinājuma, ka izvēlētās organizācijas nevēlas viņus nodarbināt. Viņi var pilnībā nodoties kādam ilgtermiņa projektam, pavisam aizmirstot par kādu īstermiņa projektu un, ja viņiem uz neilgu laiku jāpārslēdzas no vienas darbības uz citu, viņi var būt ļoti neelastīgi.
    ',
    'monarchic' => 'Valdnieks jeb Monarhs – vienprātīgs, apņēmīgs, neļauj nekam radīt šķēršļus ceļā uz problēmu risinājumu. Uz viņu var paļauties, ka problēma tiks atrisināta, jo viņi sevi noskaņo sasniegt mērķi – atrisināt problēmu. Cilvēkam ar Valdnieka domāšanas stilu problēmu risināšana ietver viena mērķa vai vajadzības apmierināšanu.</p><p>
    Lai gan tīri “monarhiskas” problēmas ir reti sastopamas, problēmas var risināt tā, it kā tās būtu monarhiskas. Tas nozīmē koncentrēties uz vienu mērķi, piemēram, darīt visu, lai iegūtu maksimālu peļņu vai pat strādāt tāpēc, lai finansētu kādu aizraušanos.</p><p>
    Personas ar Valdnieka domāšanas stilu pārsvarā ir vienpusīgi domājošas un mērķtiecīgas, tās virza viens mērķis vai vajadzība. Valdnieki mēdz pārāk vienkāršot priekšstatus par risināmajām problēmām, uzskata, ka mērķis attaisno līdzekļus, un, iespējams, relatīvi neapzinās savus aizspriedumus.</p><p>
    Valdnieki ir neelastīgi, neiecietīgi un bieži neapzinās alternatīvus risinājumus vai prioritātes. Viņi mēdz ātri pieņemt lēmumus, bet tas var novest pie pārāk vienkāršotiem lēmumu pieņemšanas procesiem.</p><p>
    Viņu izveidotajā sistēmā var tikt ņemti vērā tikai ar vienu mērķi vai vienlīdz svarīgu vajadzību kopumu saistītie mainīgie. Tas var radīt sarežģījumus sadarbībā ar citu domāšanas stilu pārstāvjiem problēmu risināšanā, jo problēmu klasifikācija balstās uz to, kā cilvēki tās attēlo. Viena problēma vienam cilvēkam var šķist otršķirīga salīdzinājumā ar citām, bet citam – monarhiska jeb primāra. Tas nozīmē, ka Valdniekam šī problēma var likties vienīgā risināšanas vērtā, savukārt, Strukturētājam – viena no vairākām, konkrētā kārtībā risināmām.</p><p>
    Darba vidē priekšnieki ar Valdnieka domāšanas stilu sagaida, ka uzdevumi tiks paveikti bez attaisnojumiem vai traucēkļiem. Kad cilvēks uzsāk partnerattiecības ar kādu, kuram piemīt Valdnieka domāšanas stils, to ļoti ātri var pamanīt. Parasti šie partneri ir ļoti apņēmīgi un visu savu laiku un domas velta vienam noteiktam mērķim, viņi ir kā apsēsti ar šo ideju.</p><p>
    Bērni–Valdnieki parasti skolā mēdz saskarties ar sekojošu problēmu: viņi parasti vēlas darīt kaut ko citu nekā to, ko dara šobrīd un diezgan ilgu laiku pavada, domājot par kaut ko citu, nevis pievēršoties skolotāja teiktajam.</p><p>
    Veiksmīga stratēģija ir attiecināt šo vienu Valdnieka interesi citās kategorijās, piemēram, Valdnieks, kuram ļoti patīk sports, bet nepatīk lasīt, būs priecīgs, ja viņam dos lasīt ar sportu saistītu literatūru. Bērnam, kam patīk ēst gatavošana, var dot matemātikas uzdevumus, kuros ietvertas receptes. Šādā veidā ir iespējams ieinteresēt Valdnieku tādos tematos vai mācību priekšmetos, kas iepriekš viņu nav interesējuši.</p><p>
    Valdnieka domāšanas stils piemīt šādām personībām: Princis Čārlzs un Kamilla Boulza. Skārleta O’Hāra un Ešlijs. Valdnieka domāšanas stilu raksturo tāda kā apsēstība ar kaut ko vienu. Jāpiebilst, ka tas atšķiras no obsesīvi kompulsīviem traucējumiem (OKT), jo cilvēki ar OKT labprāt atbrīvotos no savas apmātības. Piemēram, dedzīga monētu kolekcionēšana nav OKT, bet ir Valdnieciska domāšanas stila pazīme.
    ',
    'oligarchic' => 'Cilvēkus ar Oligarha domāšanas stilu raksturo vēlme sasniegt vairākus vienlīdz svarīgus un savstarpēji konkurējošus mērķus. Tas nozīmē, ka šie cilvēki vēlas paveikt vairākus darbus vienlaicīgi. Tā rezultātā Oligarhs bieži izjūt laika un citu resursu spiedienu šo konkurējošo prasību priekšā un tas var traucēt uzdevumu izpildi.</p><p>
    Cilvēki ar Oligarha domāšanas stilu ne vienmēr saprot ar ko sākt vai cik daudz laika atvēlēt katram uzdevumam, kas jāpaveic. Taču, pat ar nelielu kontroli pār savām prioritātēm, viņi darbu veikšanā var kļūt efektīvāki par cilvēkiem ar citiem domāšanas stiliem. Tas izskaidrojams ar to, ka Oligarhi spēj elastīgāk pārslēgties no viena projekta uz otru.</p><p>
    Oligarhi problēmas risina ar dažādām metodēm, kas var būt savstarpēji pretrunīgas. Mērķu sasniegšanā viņi piešķir prioritāti gan risinājumu meklēšanai, gan arī iespējamu traucēkļu apsvēršanai un uzskata, ka mērķis neattaisno līdzekļus.</p><p>
    Oligarhisko problēmu risināšana prasa piepildīt vienlīdz svarīgus, bet dažkārt konkurējošus mērķus un uzveikt ierobežojumus ceļā uz mērķa sasniegšanu. Piemēram, mācīt svešvalodu, vienlaikus saglabājot vietējo kultūru; veikt reformas organizācijā, vienlaikus saglabājot tās pamatprincipus; mācīt citiem domāšanas prasmes, vienlaikus nezaudējot radošumu. Katrā no šiem gadījumiem oligarhiskai problēmai ir mērķis un ierobežojums, kas abi ir vienlīdz svarīgi, un nespēja apmierināt kādu no tiem noved pie Oligarham nepieņemama risinājuma.
    ',
    'anarchic' => 'Cilvēkus ar Anarhista domāšanas stilu motivē dažādu vajadzību un mērķu sajaukums un tos bieži vien ir grūti izprast gan pašam, gan citiem. Risinot problēmas, Anarhisti izmanto neparedzamu pieeju un viņus bieži ietekmē šķietami nesakarīgi un neizskaidrojami apstākļi, bez skaidra un loģiska domāšanas procesa, kas būtu viņu rīcības pamatā. No malas izskatās, ka viņi problēmām pieiet pēc nejaušības principa.</p><p>
    Anarhistiem ir tendence noraidīt sistēmas, it īpaši, ja tās nav elastīgas. Tas nozīmē, ka Anarhisti mēdz pretoties jebkurai tajā brīdī viņus ierobežojošai sistēmai, neatkarīgi no tā, kas šī ir par sistēmu. Lai gan viņiem ir grūtības pielāgoties darba un skolas dzīvei, it īpaši, ja vide ir neelastīga, Anarhistiem bieži vien ir daudz lielāks radošais potenciāls nekā citiem, kuri viņus noraida tāpēc, ka neatzīst vai neizprot viņu domāšanas stilu.</p><p>
    Anarhisti rīkojas, koncentrējoties uz vēlamo rezultātu, nevis ievēro kādus noteiktus principus vai noteikumus problēmu risināšanā. Viņiem var būt nenoteikts vai neskaidrs priekšstats par saviem galvenajiem mērķiem, viņiem trūkst pašapziņas un viņi pauž neiecietību pret alternatīviem uzskatiem un idejām. Tāpat viņi mēdz pārāk vienkāršot sarežģītas problēmas, demonstrējot augstu elastības pakāpi un "viss ir iespējams" attieksmi.</p><p>
    Anarhistiem ir grūti noteikt prioritātes, jo viņu dzīvē trūkst stingru noteikumu, uz kuriem balstīt savus lēmumus. Anarhisti mēdz dzīvot galējībās – vai nu ir pārlieku izlēmīgi, vai arī pārāk neizlēmīgi.</p><p>
    Anarhisti apkopo informāciju no dažādiem avotiem un apvieno to radošā un netradicionālā veidā. Viņiem ir plašs skatījums uz lietām un viņi piefiksē to, ko citi uzskata par nebūtisku. Problēma skolotājiem, darba devējiem vai vecākiem, kuru pārraudzībā ir Anarhists, ir atrast, kā izmantot šo radošo potenciālu un audzināt pašdisciplīnu un organizatoriskās prasmes, kas nepieciešamas jebkurai radošajai izpausmei. Ja izdodas atrast veidu, kā to panākt, Anarhists var gūt panākumus tādās vidēs, kurās citi izgāžas.</p><p>
    Anarhiskām problēmām ir nepieciešami netradicionāli risinājumi. Šāda veida problēmas bieži tiek izmantotas, lai apstrīdētu tradicionālo domāšanu un veicinātu radošu problēmu risināšanu. Šīs problēmas ir izstrādātas tā, lai lauztu esošos domāšanas modeļus un rosinātu cilvēkus domāt “ārpus rāmjiem”. Kā piemērs anarhiskai problēmai ir "Deviņu punktu" uzdevums. Tas ir deviņu punktu režģis, kurā punkti izkārtoti 3x3 kvadrātā. Uzdevums ir savienot visus deviņus punktus, zīmējot četras taisnas līnijas, nepaceļot pildspalvu vai zīmuli no papīra. Parasti šajā uzdevumā grūtības rada tendence ierobežot līnijas iedomāto deviņu punktu robežās, nevis paplašināt tās ārpus iedomātajām robežām, kas būtu Anarhistam raksturīgs domāšanas veids.</p><p>
    Risinot anarhiskas problēmas, cilvēki tiek mudināti izmantot radošumu, oriģinalitāti un elastīgumu. Šāda veida uzdevumi palīdz attīstīt inovācijas, veicina kritisko domāšanu un paplašina iespējamo risinājumu klāstu sarežģītām problēmām. Šīs "netradicionālās" problēmas prasa radošu pieeju problēmu risināšanai tādā veidā, kas atšķiras no ierastajām metodēm. Anarhiska pieeja šāda veida problēmu risināšanai ir nepieciešama, jo paļaušanās uz jau esošajiem risinājumiem var kavēt progresu.</p><p>
    Arī radikālas pārmaiņas dzīvē prasa anarhisku pieeju. Piemēram, brīžos, kad cilvēks apzinās nepieciešamību atteikties no esošajām problēmu risināšanas metodēm un pielāgoties jauniem apstākļiem – mainot darbavietu, dzīvesvietu u. tml.
    ',
    'internal' => 'Cilvēkiem, kuri dod priekšroku Internālajam jeb iekšēji vērstam problēmu risināšanas stilam, rūp viņu prāta iekšējās norises. Internālā stila pārstāvji parasti ir introverti, savrupi, pat noslēgti, orientēti uz uzdevumu izpildi, sociāli distancēti un mazāk jūtīgi pret citiem nekā tie, kuri dod priekšroku ārējam problēmu risināšanas stilam.</p><p>
    Internālā stila pārstāvji dod priekšroku darbam vienatnē, un viņi labprātāk idejām izmanto savu intelektu, distancējoties no citiem cilvēkiem. Šajā ziņā var rasties pārpratumi attiecībā uz bērniem, jo tiek nospriests, ka bērnam trūkst sociālā intelekta, lai gan patiesībā bērna domāšanas stils ir Internāls un viņš labāk spēj mācīties vienatnē.</p><p>
    Iekšējo problēmu jēdziens attiecas uz tādiem uzdevumiem, kas saistīti ar sava intelekta patstāvīgu izmantošanu, neiesaistot citus. Piemēram, analītisku problēmu risināšana, kompozīcija, mākslas un amatniecības darbu veidošana vai darbs ar iekārtām. Šie uzdevumi ir vērsti tikai uz objektiem vai idejām, maz ņemot vērā sociālo mijiedarbību.</p><p>
    Bieži vien izglītībā tiek uzdots jautājums – kā ir labāk? Bet nav vienas pareizas atbildes. Izglītībā mēdz pastāvēt viedoklis, ka labāka mācīšanās notiek mazajās grupās, kad cits no cita mācās, lai gan ne vienmēr tā ir, jo katram ir cits sevis pārvaldības stils. Tas nenozīmē, ka Internāliem bērniem nekad nevajadzētu strādāt grupās, vai, ka Eksternāliem – vienatnē. Ir būtiski, ka bērni attīsta elastību pielāgoties situācijām, jo tas būs svarīgi visa mūža garumā. Tomēr, arī skolotājiem jāspēj pielāgot uzdevumi – reizēm vienatnē, reizēm grupā. Ja visu laiku tiks doti uzdevumi, kurus jāpilda pēc vieniem un tiem pašiem nosacījumiem (grupā, vai vienatnē), tad viena daļa vienmēr būs ieguvēji, bet cita – vienmēr zaudētāji, kuri uztvers to kā sodu un ciešanas.
    ',
    'external' => 'Cilvēki, kas izvēlas Eksternālu jeb ārēji vērstu domāšanas stilu, parasti ir ekstraverti, sabiedriski, orientēti uz cilvēkiem, iejūtīgi un starppersonu saskarsmē izveicīgi. Bieži vien jūtīgi sociālās situācijās un ļoti labi apzinās ar apkārtējiem notiekošo. Viņiem patīk sastrādāties ar citiem, cik vien iespējams. Tāpat viņi aktīvi meklē problēmas, kas saistītas ar spēju mijiedarboties ar citiem vai risināt citu cilvēku problēmas.</p><p>
    Lai risinātu eksternālas problēmas, cilvēkam ir jāpielieto intelekts ārējās pasaules kontekstā, kas ietver gan citus cilvēkus, gan viņu pašu. Šāda veida problēmas parasti ir saistītas ar mijiedarbību ar citiem cilvēkiem un prasa sadarbību, lai rastu risinājumu. Ārējo problēmu risināšanas piemēri ir padoto pārraudzība darbavietā, sadarbība ar vadītājiem vai kolēģiem, draudzības uzturēšana un intīmu attiecību veidošana.</p><p>
    Bieži vien izglītībā tiek uzdots jautājums – kā ir labāk? Bet nav vienas pareizas atbildes. Izglītībā mēdz pastāvēt viedoklis, ka labāka mācīšanās notiek mazajās grupās, kad cits no cita mācās, lai gan ne vienmēr tā ir, jo katram ir cits sevis pārvaldības stils. Tas nenozīmē, ka Internāliem bērniem nekad nevajadzētu strādāt grupās, vai, ka Eksternāliem – vienatnē. Ir būtiski, ka bērni attīsta elastību pielāgoties situācijām, jo tas būs svarīgi visa mūža garumā. Tomēr, arī skolotājiem jāspēj pielāgot uzdevumi – reizēm vienatnē, reizēm grupā. Ja visu laiku tiks doti uzdevumi, kurus jāpilda pēc vieniem un tiem pašiem nosacījumiem (grupā, vai vienatnē), tad viena daļa vienmēr būs ieguvēji, bet cita – vienmēr zaudētāji, kuri uztvers to kā sodu un ciešanas.
    '
);