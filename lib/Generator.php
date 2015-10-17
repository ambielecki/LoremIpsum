<?php
/*
 * This file is part of the Badcow Lorem Ipsum Generator.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ambielecki\LoremIpsum;

class Generator
{
    /**
     * The mean word length of a sentence
     *
     * @var float
     */
    protected $sentenceMean = 24.460;

    /**
     * The standard deviation of words in a sentence
     *
     * @var float
     */
    protected $sentenceStDev = 5.080;

    /**
     * Mean number of sentences per paragraph
     *
     * @var float
     */
    protected $paragraphMean = 5.800;

    /**
     * The standard deviation of sentences in a paragraph
     *
     * @var float
     */
    protected $paragraphStDev = 1.930;

    /**
     * @var array
     */
    protected $words = array("benInal","jIj","jIn","jornub","loDnInal","mojaQ","neHjej","ngeHmeH QIn nav","nISwI bej","pubej","Soq","tIb","tlhaptIH","aD","baQ","bep","cha","chab","chatlh","chor","choS","chu","DaH","Daj","Daq","Degh","Degh","DIS","Doch","Dor","Dub","Duj","em","et","ghaw","ghay","ghor","ghun","Hat","Ho","Ho","Hu","Huj","Hurgh","HuS","It","Iv","jav","jav","jaw","je","jey","jIH","jIH","joq","lagh","leS","lev","lI","loS","luH","luH","lup","maH","maS","matlh","may","mI","mIQ","mogh","mon","mut","naQ","nay","neH","nIH","noH","pa","pagh","pay","pIH","poS","pov","pum","pum","pup","puS","qa","qab","qagh","qan","QaS","qay","Qel","qeng","qogh","qoj","qor","qotlh","Quch","Qugh","qun","ram","raQ","reH","roS","SaH","Sep","Sev","SoQ","Sub","SuD","Sup","ta","ta","tagh","taH","tam","tay","tay","tey","tIq","tlhay","tuH","ut","vaj","vay","vI","waQ","wej","woj","yaD","yaH","yay","yIntagh","aD","baQ","bep","cha","chab","chatlh","chor","choS","chu","chu","DaH","Daj","Daq","Degh","DIS","Doch","Dor","Dub","Duj","em","et","ghaw","ghay","ghor","ghun","Hat","Ho","Hu","Huj","Hurgh","HuS","It","Iv","jav","jaw","je","jey","jIH","joq","lagh","leS","lev","lI","loS","loS","luH","lup","maH","maS","matlh","may","mI","mIQ","mogh","mon","mut","naQ","nay","neH","nIH","noH","pa","pa","pagh","pagh","pay","pIH","poS","pov","pum","pup","puS","qa","qab","qagh","qan","QaS","qay","Qel","qeng","qogh","qoj","qor","qotlh","Quch","Qugh","qun","ram","raQ","reH","roS","SaH","Sep","Sev","SoQ","Sub","Sub","SuD","Sup","ta","tagh","taH","tam","tay","tey","tIq","tlhay","tuH","ut","vaj","vay","vI","waQ","wej","woj","yaD","yaH","yay","yIntagh","DIS","naQ","vI","a","ab","ach","agh","aH","aj","alngegh","amerIqa SepjIjQa","ampaS","ang","antonI","anyan oQqar","aplo","aqleH","aQlo","aqnaw","aqroS","aqroS","aqtu mellota je","aqtu","ar","argh","arlogh","aSralya","at","atlhqam","atrom","av","avwI","aw","awje","ay","ba","bach","bach","bachHa","bagh","baghneQ","baH","baHjan","baHwI","baj","bal","banan naH","bang «bom»","bang «pong»","bang","baq","baQa","baqghol","barat","bargh","barot","baS «In»","baS","batlh","batlh","batlhHa","bav","bay","be","beb mutlhwI","beb","bech","beetor","begh","beH","beHom","bej","bej","bejoy","bel","bel","belHa","bem","ben","benal","benI","beq","beQ","beqpuj","bergh","bertlham","betleH «bey»","betleH «obe»","betleH","bey","bey","beylI","bI","bID","bIghHa","bIH","bIj","bIj","bIm","bIng","bIp","bIQ «bal»","bIQ Duj","bIQ ghaywI pa","bIQ ghaywI","bIQ","bIQa HeH","bIQa","bIQDep","bIQSIp «ugh»","bIQSIp","bIQtIq","bIr","bIraqlul","bIrel","bIreQtagh","bIreqtal","bIreS","bISub","bIt","bIv","bo","bobcho","boch","bochmoHwI","boD","boDagh","boDegh","boDIj","bogh","boH","boj","bol","bolwI","bom «mu»","bom","bom","bomwI","bong","bop","boq «ru»","boq","boQ","boQ","boQ","boq","boQDu","boqHa","boqrat","bor","borghel","bortaS «DIb»","bortaS","boS","bot","botjan","botlh","bov","bu","buD","bup","buq","buQ","bur","burgh «quD»","burgh","buS","buSHa","butlh","buv","buv","buy «ngop»","buy","cha","chabIp","chach Duj","chach","chach","chaDIch","chaDIch","chaDo","chaDvay","chaetlh pewI","chagh","chaH","chaHu","chaj","chal","chaleS","chalogh","cham","chamwI","chan","chanaS","chanDoq","changeng","chanob","chap","chapar","chapuj","chapujqut","chaq","chaQ","chaqu","char","chargh","charghwI","chaS","chav","chav","chaw","chaw","chay","chay","che","cheb","cheba","chech","chechtlhutlh","chegh","cheH","chej","chel","chelwI","chemvaH","chen","cheng","chenmoH","chenmoHwI","chep","cher","chergh","cheron","cheSvel","cheSvel","chetvI","chetvI","chev","chevwI «tlhoy»","chIch","chID","chIj","chIjwI","chIl","chIm","chIp","chIrgh","chIS","cho","cho","chob","choba","choghvat","choH","choH","chol","choljaH","chom","chon «bom»","chon","chong","chong","chong","chonnaQ","chontay","chop","choptaH","choq","choQ","chor «bargh»","chorgh","chorgh","chorghDIch","chot","chotwI","chov","chovnatlh","chuch","chuH","chuH","chuHchu","chun","chunDab","chung","chup","chuq","chuqa","chuQun","chuS","chuSugh","chut","chuv","chuvmey","chuwI","chuwI","chuy","chuyDaH","Da","Da","Dab","Dach","Dach","Daghtuj","DaHjaj «gheD»","DaHjaj","Dal","Dan","Danal","Dap «bom»","Dap","DaQ","Daqtagh","Dargh «HIvje»","Dargh","DarSeq","DaS","DaSpu","Dat","Dav","DavHam","DavI","Daw","Daw","Day joH","Day","DayquS","De chu ghItlh","De jengva","De","Deb","Dech","DeghwI","DeH","Dej","Del","DenIb Qatlh","DenIb","DenIbngan","DenIbya Qatlh","DenIbya","DenIbyangan","Denmargh","Dep","DeQ","Der","DeS","DeS","DeSqIv","Dev","DevwI","DewI","DI","DIb","DIch","DIghna","DIj","DIj","DIl","DIlyum","DIn","DIng","DIp","DIr «In»","DIr qanwI taS","DIr","DIron","DIv","DIvI","DIvImayDuj","Do «Qe»","Do","Do","Do","DoD","Dogh","Doghjey","DoH","DoHa","DoHa","DoHmoH","Doj","Dol","Dom","Don","Dop","Doq ej SuD","Doq ej wovbe","Doq","DoQ","Doqqu ej wov","DoS","Dotlh","Dovagh","Doy","DoyIchlan","DoyyuS","Du «naH»","Du","DuD","DuDwI","Dugh","DuH","DuH","Duj ngaDHa","Dum","Dun","Dung","DungluQ","Dup","Duq","DuQ","DuQ","DuQwI","DuQwIHommey","Duran «lung» «DIr»","DuraS","DuS","DuSaQ","Duv","Duy","Duy","Duy","Duya","e","eb","ech","echlet","echletHom","eDjen","eDSeHcha","egh","eH","ej","ejDo","ejyo","ejyowaw","el","elaDya","elaS","elIjaH","elpI","emam","emamnal","enal","eng","entepray","ep","epIl naH","eq","er","erIn","eS","eSpanya","etlh","ev","evnagh","ey","ghab tun","ghab","ghagh","ghaH","ghaj","ghajwI","ghal","gham","ghang","ghangwI","ghanjaq","ghantoH","ghap","ghaq","ghar","ghar","ghargh","gharlIq oQqar","gharwI","ghatlh","ghatlhIq","ghawran","ghaycha","ghaytan","ghaytanHa","gheb","gheD","ghegh","ghel","ghem","ghenaQ","gheor","gher","gheS","ghet","ghetor","ghetwI","ghevchoq Sep","ghevI","ghew","ghIb","ghIboj Sech","ghIch","ghIgh","ghIgh","ghIH","ghIj","ghIlab ghew","ghIlaSnoS","ghIm","ghIn","ghIntaq","ghIpDIj","ghIq","ghIQ","ghIqtal","ghIr","ghIrep naH","ghIrIlqa","ghISDen","ghIt","ghIt","ghItlh","ghItlh","ghItlhwI","gho","gho","gho","ghob","ghob","ghobchuq loDnIpu","ghobe","ghoch","ghoch","ghochwI","ghoD","ghoDo","ghogh HablI","ghogh","ghoH","ghoj","ghojmeH ghItlhwI","ghojmeH taj","ghojmoH","ghojmoq","ghojwI","ghol","ghom","ghom","ghoma","ghomHa","ghonDoq","ghong","ghong","ghop","ghopDap","ghoq","ghoQ","ghoqwI","ghorgh","ghoS","ghoS","ghot","ghotI","ghov","ghu","ghu","ghubDaQ","ghuH","ghuH","ghuHmoH","ghum","ghum","ghung","ghup","ghur","ghuS","ghuS","ghuv","ghuy","ghuycha","Ha","Hab","HablI","Hach","HaD","HaDIbaH ghIH tIr ngogh je","HaDIbaH","HaDIbaH","Hagh","HaH","HaH","Haj","HajDob","Hal","HanDogh","Hap","Haq","Haq","Haq","HaQchor","Haqtaj","Haquj","HaqwI","Har","Hargh","HaSta jIH","HaSta","Hatlh","Haw","Hay","Hay","Haychu","He","He","Hech","HeD","HeDon","Hegh","Hegh","Heghba","Heghbat","HeghmoH","Heghtay","HeH","Hej","HejwI","Hem","Heng","HenrI","HeQ","Hergh ngevwI","Hergh QaywI","Hergh","HerghwI","HeS","HeS","HeSo","HeSwI","Hev","Hew chenmoHwI","Hew","HI","HIch","HIchDal","HIDjolev","HIgh","HIj","HIja","HIjmeH chaw","HIjwI","HIp","HIq","HISlaH","HItuy","HIv","HIvDuj","HIvHe","HIvje bom","HIvje","HIvneS","Ho etlh","Ho teywI","Hob","Hoch","HochDIch","HochHom","Hochlogh","HoD","HoDu SaymoHwI tlhagh","Hogh","HoH","HoH","HoHegh","Hoj","Hol ghoQ","Hol","HolQeD","Hom","Hom","Hom","HomwI","Hon","Hong boq chuyDaH","Hong","Hongghor","Hooy","Hop","Hoq","HoQ","Hoqra","HoS choHwI","HoS","HoS","HoSchem","HoSDo","HoSghaj","Hot","Hotlh","Hotlh","HotlhwI","Hov","HovpoH","Hovtay","Hoy","Hu","Hub","Hub","HubneS","Huch chaw","Huch nav","Huch","HuchQeD","HuD beQ yoS","HuD","Hugh","HuH","Hum","Human","Hun","Hung","Hup","Huq","Hur","HurDagh","HurIq","HurIqngan","Hut","HutDIch","Hutegh","HutIn vIl","HutIn","Hutlh","Hutvagh","Huv","Huy","HuyDung","I","Ib","Igh","IghvaH","IH","Ij","Il","Im","In","Ip","Ip","Iq","IQ","IqnaH QaD","IqnaH","IrneH","IrneHnal","ISeghIm","ISjaH","Italya","Itlh","Iw Ip ghomey","Iw","Iwghargh","ja","jab","jabbIID","jabwI","jach","jachuq","jachuq","jaD","jagh","jaH","jaj","jajlo Qa","jajlo","jajvam","jan","jan","jang","janluq «pIqarD»","jaq","jaQ","jaQHa","jaqmoH","jar","jargh","jaS","jat","jat","jatlh","jatyIn","javDIch","jay","jay","je","jech","jech","jeD","jegh","jeH","jej","jejHa","jemS tIy qIrq","jen","jengva","jeq","jeQ","jeqqIj","jer","jeS","jev","jev","jeynaS ghoqwI","jeynaS","jIb HoDu","jIb yachwI","jIb","jIj","jIl","jIm","jInaq","jInmol","jIp","jIr","jIrmoH","jIv","jo","jo","joch","joD","jogh","joH","joj","jojlu","jol","jol","jolpa","jolpat","jolvoy","jom","jon","jonpIn","jonta","jonwI","jop","joQ","joQ","joqwI","jor","jorneb","jorwI","joS","joS","jot","jotHa","jotlh","joy","jub","jubbe","juch","juH qach","juH","juHqo","jul","jum","jun","jungwoq","jup","juS","juv","la","laa","lab","lach","laD","laH","laj","laj","lajQo","lalDan","lam","lam","lan","lang","laq","laQ","laquv","largh","laSIv","laSvargh","lat","latlh","lav","law","lay","lay","layHa","le","lebe","legh","leH","leH","lel","lem","lemIS","len","leng buq","leng chaw","leng","leng","lengwI","leQ","leSpal","leSpoH","leSSov","let","letlh","letlh","ley","leyo","lIch","lIgh","lIghon DuQwI pogh","lIghon","lIghongan","lIghonngan","lIghonya","lIghonyangan","lIH","lIj","lIm","lInDab","lIng","lIngta","lIngwI","lIq","lIr","lIS","lIt","lItHa","lIw","lIy","lo law","lo","lo","lob","lobHa","loch","loD","loDHom","loDnal","loDnI","logh","loghqam","loH","loH","loj","lojmIt","lol","lol","lolaH","lolaHbe","lolaHbeghach","lolaHghach","lolchu","lolchutaH","lolmoH","lolSeHcha","loltaH","lom","lon","lop","lop","lopno","loQ","lor","lorbe","lorloD","loSDIch","loSpev","lot","lotlh","lotlhmoq","lotlhwI","loy","lu","lu","luch","lugh","luHwI tIH","luj","lul","lulIgh","lum","lung","lupDujHom","lupwI mIr","lupwI","luq","lur","lurDech","lurgh","lurSa","luSpet","lut","lutlh","ma","mab","mach","maDyar","magh","maghwI","maHpIn","maj","majQa","majyang mutlhwI","majyang","malja","mang","mangghom","mangHom","maq","maQmIgh","maqoch","mar","mara","martaq","marwI","maSIr","maSwov","matHa","matlhHa","maveq","mavje","mavjop","maw","maw","may bom","may","mayDuj","mayluch","maymorgh","mayron","me","meb","mebpamey","mech","megh","meghan","meH","mej","melchoQ","mellota","mem","menal","menggho naH","mep","meQ","meq","meq","meqba","meqleH","meqrovaq","mer","meSchuS","mev","mevyap","meyIS tIr","meyrI","mI nagh","mIch","mID","mIgh","mIl","mIllogh qonwI qoSta","mIllogh qonwI","mIllogh","mIloD ngeb","mIloD","mIm","mIn QanwI nguv","mIn","mIp","mIp","mIqta","mIr","mIS","mIS","mISmoH","mIStaq","mIv bargh","mIv","mIv","mIva","mIw","mIy","mo","mo","mob","moch","moD","moH","moH","moHaq","moj","mojaq","mol","mol","molor","mong Haquj","mong","mongDech","mop","moq","moQ","moQ","moQbara","morgh","moS","motlh","motlh","motlhbe","mov","moybI","mu","mub","much","much","much","muchwI","muD Dotlh","muD Duj","muD","muD","mugh","mughato","mughom","mughwI","muH","muj","mul","mum","mumey Doy","mumey ghoQ","mumey ru","mun","mung","mup","mupwI","mupwIHom","muq","muqaD veS","muqaD","muS","mutay","mutlh","mutlhegh","mutlhwI","muv","muvmoH","muvtay","na","na","nab","nab","nach","naD tetlh","naD","naD","naDev","naDHa","naDHaghach","naDqaghach","nagh beQ","nagh DIr","nagh","nagh","naghboch","naH taj","naH","naHjej","naHlet","naHnagh","naj","najmoHwI","nalqaD","namtun","namwech","nan","nan","nan","nanwI","nanwI","nap","naQHom","naQjej","naran","nargh","nargh","naS","natlh","natlh","natlIS","nav HablI","nav qatwI","nav","naw","naw","nawlogh","nay","ne","neb","nech","neDerlan","negh","neHmaH","nej","nejwI","nem","nen","nen","nenchoH","nenghep","nentay chaDIch","nentay waDIch","nentay","nep","nepwI","neSlo","net","netlh","nevDagh","ngab","ngach","ngachuq","ngaD","ngaDmoH","ngaDmoHwI","ngagh","ngaj","ngal","ngan","ngaq","ngaQ","ngaQHamoHwI","ngaS","ngat","ngat","ngav","ngawDeq","ngay","ngay","nge","ngeb","ngech","ngech","ngeD","ngeH","ngeHbej","ngej","ngem","ngeng","ngep","ngepoS","ngeQ","nger","ngev","ngevwI","ngI","ngIb","ngIj","ngIl","ngIm","ngIp","ngIq","ngIv","ngo","ngoch","ngoD","ngogh mutlhwI","ngogh tun","ngogh","ngoH","ngoH","ngoj","ngol","ngong","ngong","ngop","ngoq","ngoQ","ngoqDe","ngor","ngoS","ngotlh","ngoy","ngu","ngugh","ngujlep","ngun","ngup","ngup","nguq","nguSDI","nguv","nguvmoH","nI","nIb","nIbpoH","nIch","nID","nIHwI","nIj","nIm tlhagh","nIm wIb ngogh","nIm","nImbuS wej","nIn","nIpon","nIQ","nIS","nISwI beH","nISwI DaH","nISwI HIch","nISwI tIH","nISwI","nIt","nIteb","nItebHa","nItlh naQ","nItlh","nItlhpach","nItlhpach","nIv","nIvnav","nIvqu","nIyma","no DIr","no Hol","no","nob","nob","nobHa","noch","noD","nogh","noHvaDut","noj","nol","nom","non","nong","nooch","nop","noregh","norgh","noS","noSvagh","not","notlh","notqa","nov","nov","noy","nub","nubwI","nuch Hergh","nuch","nuD","nugh","nughI","nuH bey","nuH","nuH","nuHHom","nuHmey","nuHpIn","nuj","num","nung","nup","nuq","nuQ","nuqDaq","nuqjatlh","nuqneH","nur","nural","nuralngan","nuS","nuSIylan","nuv","o","o","obe","obmaQ","och mutlhwI","och","oD","oDwI","ogh","oH","oj","ol","olav","om","omegh","ong","op","oQqar","or","orghen rojmab","orghen","orghengan","orghenya rojmab","orghenya","orghenyangan","orwI","oS","oSwI","ot","otlh","ov","owen","oy","oy","oynaQ","pa beb","pa reD","pab","pab","pabHa","pach","paghDIch","paghlogh","paH bID","paH","paj","pan","pang","paq","paQDInorgh","par","parbIng","parHa","parmaq","parmaqqay","paS","paSlogh","pat","patat oQqar","patlh","patlh","pav","paw","paw","paw","pay","pe","pebot","peD","peegh","pegh","pegh","pegh","peghmey vIttlhegh","peHghep","pej","pelaQ","pem","pemeH taj","pemjep","peng","pep","peQ chem","peQ","per naH","per yuD","per","per","petaQ","pevIl","pey","pI","pIch","pIch","pID","pIgh","pIj","pIjHa","pIl","pIlam naH","pIlmoH","pIm","pIn tlhoy","pIn","pIn","pIna","pIp","pIpyuS","pIq","pIQ","pIqaD","pIQHa","pIraqSIS","pIrmuS","pItlh","pItSa chab","pIv","pIvchem","pIvghor","pIvlob","pIw","po","po","pob","poch","poD","poDmoH","pogh","poH","poH","poj","poj","pol","polHa","pom","pon","pong","pong","pop","poq","poQ","por","porgh mIw","porgh","porghQeD","portughal","poSmoH","potlh","potlh","pu","pub","pubeH","pubeq","puch","puchpa","puDaH","pugh","puH Duj","puH","puHIch","puj","pujIn","pujmoH","pujwI","pummoH","pung","puq chonnaQ","puq Hol","puq poH","puq","puQ","puqbe","puqloD","puqnI","puqnIbe","puqnIloD","pur","puv","puy","puyjaq","Qa","Qab","qach","Qach","QaD","QaD","qaD","qaD","QaDmoHwI DIr","Qagh","Qagh","qaghwI","qaH","QaH","QaH","QaHom","Qaj tlhuQ","qaj","Qaj","qajunpaQ","qal","Qal","qalmoH","qam Do Duj","qam","Qam","qama","qameH vIttlhegh","qameH","qamor","Qan","qanaDa","Qang","qang","qang","qanraD","qanwI","qap","Qap","Qap","Qapla","qaq","Qaq","QaQ","qar","Qaraj","qarDaS","qarDaSngan","qarDaSQa","Qargh","qarghan","qarI","qarol","qaryoq","qaryoqa","qaS","Qat","qat","qat","qatlh","Qatlh","qatlhDa","Qav","qavam","qavap","qavaQ","qavIn","qaw","Qaw","qawHaq","qawmoH","qay","Qay","Qay","Qay","Qay","qaywI","QaywI","Qe","qeb","Qeb","Qeb","qech","qeD","QeD","QeDpIn","qegh","qeH","QeH","QeH","qej","Qej","qel","qelIqam","qem","QemjIq","qempa","qen","Qenvob","qep","QepIt","Qeq","qeq","qeq","qerot oQqar","qeS","qeS","qet","qetlh","qettlhup","Qev","qev","qev","qevaS","qevpob","qew","qewwI","Qey","QeyHa","QeyHamoH","qeylIn","qeylIS betleH","qeylIS mInDu","qeylIS","qeylor","QeymoH","qeyvaq","QI","qI","QI","qIb","QIb","qIbHeS","qIch","QIch","QID","qID","qID","qIempeq","qIgh","QIghpej","qIH","QIH","QIH","QIH","qIj ej wov","qIj","QIj","qIl","QIlop","qIm","QIm","qImHa","qImlaq","QIn echletHom","QIn pup","QIn vagh","QIn","QIn","QIncha","qIp","QIp","qIQ","qIrq","QIS","qIt","QIt","qItInga","QItomer","QItu","qIv","QIv","qIvon","qIvorIt","QIyaH","qo","Qo","Qob","Qob","qoch","Qoch","Qochbe","qoD","QoD","Qogh","QoghIj","qoH","Qoj","Qol","qola awje","qoleq","qolotlh","qolqoS","Qom","Qom","qompogh","qon","qon","Qong","QongDaq buq","QongDaq buqHom","QongDaq","QonoS","QonoS","qonwI","qop","Qop","Qop","QopmoH","QoQ jan","qoq","QoQ","qoqaD","Qor","qorDu","qoreQ","qorgh","Qorgh","qorghwI","Qorwagh","qoS","QoS","qoSta","Qot","Qotlh","Qotmagh Sep","Qotmagh","Qovpatlh","Qoy","qoy","Qu","qu","qu","qu","qub","Qub","quch","QuchHa","quD","QuD","qugh","qughDo","qughDuj","quH","quHvaj","Quj","Quj","QujmeH moQ","QujwI lIw","qul mIwI","qul naQ","qul tuq","qul","Qul","Qulpa","qum","Qum","qum","Qum","QumpIn","qumwI","QumwI","Qun","qung","qup","Qup","quprIp","quq","QuQ","qur","qurgh","quS","QuS","QuS","qut","Qut","qutlh","Qutlh","qutluch tay","qutluch","quv bey","Quv","quv","quv","Quvatlh","quvHa","quvHaghach","quvHamoH","quvmoH","quyIp","ra","rach","rachwI","raD","ragh","raghomquv","raHta","ral","ramjep","rap","raQpo","rar","raS","raSber naH","raSya","rataj","ratlh","rav","rav","raveq","raw","rawI lupwI","rawI","ray tIr","ray","ray","rech","reD","regh","reghuluS Iwghargh","reghuluS","reghuluSngan","rejmorgh","rep","ret","retaq","retlh","rewbe","rey","rI","rIgh","rIH","rIHwI","rIl","rIl","rIlwI","rIn","rIp","rIQ","rIQmoH","rISe","rIt","rItlh naQ","rItlh","rIvSo","rIymuS","ro","ro","roD","rogh","roghmoH","roghvaH","roj","roj","rojHom","rojmab qep","rojmab","rol taj","rol","rom","romuluS","romuluSngan","ron","ronmoH","rop","rop","ropyaH qach","ropyaH","roQ","roqeghIwchab","ror","roSHamoH","roSwI","rotlh","ru","ruch","ruDelya ropa","ruDelya","rugh","ruHa","run","runpI","rup","ruq","ruQ","ruqevet","rur","rura pente","ruStay","rut","rutlh","ruv","Sa","Sab","Sach","SaD","Sagh","SaHut","Saj","Sal","Sam","San","Sang","SanID","Sap","Saq","SaQ","SaQej Sep","Saqghom","Saqjan","Sar","Sar","Sargh","SaS","SaS","SaS","Satlh","Saw","Saw","Say","Say","SaymoHwI tlhagh","SayqumoH","Se","Sech","SeDveq","Segh","SeH","SeHlaw","Sen","Seng","Seng","SenwI","Separ","Seq","SeQ","Ser","SermanyuQ","Serrum","SeS","Setu","Sey","SeymoH","SIbDoH","SIbI","SIbIHa","SIch","SID","SIgh","SIH","SIj","SIj","SIjwI","SIla","SIm","SIp","SIq","SIQ","SIqwI","SIQwI","SIrgh","SIS yoD","SIS","SIv","So","Soch","Soch","SochDIch","SoD","SoD","Sogh","SoH","Soj naQ","Soj qub","Soj","Soj","Sol","Som","Somraw","Son","SonchIy","Sop","SopwIpa","SoQmoH","Sor Hap In","Sor Hap","Sor","Sorgh","Sorya","SoS","SoSbor","SoSbora","SoSnI","Sot","Sotlaw","Sov","Sov","SowI","Soy","Su","Subpu vaS","Such","Sugh","Sughar qut","SuH","Suj","Sulop","Sum","Sun","Sung","Supghew","Suq","SuQ","Suqqa","Surchem","Surgh","SuS","SuS","SuSDeq","Sut HabmoHwI","Sut","Sutlh","Sutovoqor","Sutraber naH","Suv","Suvchu","Suverya","SuvwI","SuwomIy","Suy","Suy","SuyDuj","ta Hol","ta tlhIngan Hol","ta","tach","taD","taDmoH","tagha","taHqeq","taj","tajHommey","tajtIq","tajvaj","tal","talarngan","tammoH","tangqa","tap","taQ","taQbang","taqev","tar","targh tIq","targh","taS","taSman","tat","tatlh","tay","taymoH","tayqeq","teb","teblaw","tebwI","teghbat","teH","tej","tel","telun Hovtay","tem","ten","tengchaH","tennuS","tennuSnal","tep","tepqengwI","teq","tera naran wIb","tera naran","tera narana","tera pebot","tera yav atlhqam","tera","terangan","teS","tet","tetlh","tev","tey","teybe","teyloD","teywI","tI","tI","tIang","tIch","tIgh","tIH","tIH","tIj","tIjwI","tIjwIghom","tIl","tIn","tIng","tIngDagh","tIQ","tIqa vIghro","tIqnagh lemDu","tIqnagh","tIr ngogh QaD","tIr ngogh","tIr","tIS","tIv","tIvIS","tIwI","tlha","tlhaa","tlhab","tlhab","tlhach mumey","tlhach","tlhagh patat oQqar naQHommey","tlhagh","tlham","tlham","tlhap","tlhapqa","tlhaq","tlhaQ","tlharghDuj","tlhaS","tlhatlh","tlhaw","tlhe","tlheD","tlhegh","tlhej","tlhepQe","tlher","tlhetlh","tlhevjaQ","tlhIb","tlhIch pur","tlhIch","tlhIH","tlhIj","tlhIl","tlhIl","tlhIlHal","tlhIlwI","tlhIm","tlhImqaH","tlhIng yoS","tlhIngan Hubbeq","tlhIngan IH qaD","tlhIngan jIH","tlhIngan wo","tlhIngan yejquv","tlhIngan","tlhIq","tlhIS","tlhIv","tlhIyopatra","tlho","tlho","tlhob","tlhoch","tlhogh","tlhoj","tlhol","tlhombuS","tlhon","tlhong","tlhop","tlhoQ","tlhoren","tlhorgh","tlhorghHa","tlhoS","tlhot","tlhov","tlhoy SaS","tlhoy","tlhoy","tlhu","tlhuch","tlhuD","tlhuH","tlhuH","tlhuH","tlhumoH","tlhup","tlhuQ","tlhutlh","to","tob","tobaj","toch","toD","toD","toDDuj","toDSaH","toDuj","togh","toH","toj","tomat naH","tongDuj","tonSaw","toplIn","toppa","toq","toQ","toQDuj","toqvIr lung","tor","tor","torgh","toS","totlh","tovaDaq","towaQ","toy","toywI","toywIa","tu","tuch","tugh","tuHmoH","tuHomIraH","tuj muvwI","tuj","tuj","tul","tulu","tulum","tum","tun","tung","tungHa","tup","tuq Degh","tuq","tuQ","tuQDoq","tuQHamoH","tuqjIjQa","tuQmoH","tuqnIgh","tuqvol","turIqya","tuS","tut","tuv","tuy","u","uch","uchHa","uD Haqtaj","uD","uDa","ugh","uH","uj","uja","ul aplo","ul pat mutlhwI","ul Sech","ul","um","un naQ","un quD","un","up","uQ","uQa","ur","urmang","urwI","uS","uSgheb","uSu","utlh","uy","uy","va","vabDot","vaD","vagh","vagh","vaghDIch","vaH","vaHbo","val","valQIS","van bom","van","van","van","vana","vang","vanuch","vaq","vaQ","vaS","vaSa","vatlh DIS poH","vatlh","vatlhvI","vav","vavnI","vay","veb","veD","veDDIr","vegh","veH tIn","veH","vel","velqa","velwI","vem","vemeq","vemmoH","veng waDIch Sep","veng waDIch","veng","vengHom","veQ","veQDuj","veqlargh","veragh","verengan HaDIbaH","verengan","vergh","vergh","veS","veSDuj","vetlh","vey","vID","vIDIr","vIghro","vIH","vIj","vIl","vIl","vIlInHoD","vIlle","vIn","vIng","vInova qurgh","vIq","vIqSIS","vIraS Hol","vIraS","vIt","vIt","vItHay","vIttlhegh","vIychorgh","vo","voDleH","vogh","voHDajbo","volchaH","von","vong","vonlu","voq","voQ","voqHa","voQSIp","vor","voSpegh Sep","vu","vub","vuD","vul","vulchoH","vulqan","vulqangan","vum","vup","vuQ","vuS","vut","vutmeH un","vutpa","vutun","vutwI","vuv","vuwI","wa","wab HevwI","wab qoSta aplo","wab","waDIch","wagh","waH","waH","waHu","waleS","walogh","wam","wamaH","wamaHDIch","wamwI","wan","wanHa","wanI","waq","waqboch","warjun","watlh","wav","waw","way","way","web","wech","wegh","weH","wejDIch","wejpuH","wejwa","wel","wem","wem","wen","wep buq","wep","wep","weq","weQ","weQmoQnaQ","wew","wey","wIb","wIch","wIgh","wIH","wIj","wIl","wIlpuq","wItlh","wIv","wIv","wIy","wo tay","wo","wob","woch","woD","wogh","woH","woj choHwI","wom","woQ","worIv","wornagh","woS","wot","wov","wovmoHwI moQ","wovmoHwI","wuD","wun","wup","wuq","wuQ","wuS rItlh naQ","wuS","wutlh","wuv","ya","yab","yach","yach","yagh","yaj","yajHa","yan ISletlh","yan","yan","yanwI","yap","yaS chaDIch","yaS waDIch","yaS","yatlh","yatqap","yav","yay","yeb","yej","yejan","yejHaD","yejquv","yem","yep","yepHa","yeq","yer","yergho","yev","yIb","yIH","yIn","yIn","yInroH","yInSIp","yIQ","yIr","yIrIDngan","yISrael","yIt","yIv","yIv","yIvbeH SeQHa","yIvbeH","yIvbeH","yo","yob","yoD","yoD","yoDegh","yoH","yoHwI","yoj","yol","yon","yong","yonmoH","yopwaH bID","yopwaH buq","yopwaH","yoq","yor","yoS","yoSeH yaHnIv","yot","yot","yotlh","yov","yoy","yu","yu","yub","yuch ngogh","yuch","yuD","yuDHa","yuegh","yupma","yuQ","yuQHom","yuQjIjDIvI","yuQjIjQa","yur","yuv","yuvtlhe");

    /**
     * Set an array of words. Removes existing words.
     *
     * @codeCoverageIgnore
     *
     * @param $words
     */
    public function setWords(array $words)
    {
        $this->words = $words;
    }

    /**
     * Add a single or array of multiple words to the generator.
     *
     * @codeCoverageIgnore
     *
     * @param string|array $words
     */
    public function addWords($words)
    {
        if (is_array($words)) {
            $this->words = array_merge($this->words, $words);

            return;
        }

        $this->words[] = $words;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return array
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param float $paragraphMean
     */
    public function setParagraphMean($paragraphMean)
    {
        $this->paragraphMean = (float) $paragraphMean;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return float
     */
    public function getParagraphMean()
    {
        return $this->paragraphMean;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param float $paragraphStDev
     */
    public function setParagraphStDev($paragraphStDev)
    {
        $this->paragraphStDev = (float) $paragraphStDev;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return float
     */
    public function getParagraphStDev()
    {
        return $this->paragraphStDev;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param float $sentenceMean
     */
    public function setSentenceMean($sentenceMean)
    {
        $this->sentenceMean = (float) $sentenceMean;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return float
     */
    public function getSentenceMean()
    {
        return $this->sentenceMean;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param float $sentenceStDev
     */
    public function setSentenceStDev($sentenceStDev)
    {
        $this->sentenceStDev = (float) $sentenceStDev;
    }

    /**
     * @codeCoverageIgnore
     *
     * @return float
     */
    public function getSentenceStDev()
    {
        return $this->sentenceStDev;
    }

    /**
     * Get an array of random words from $words
     *
     * @param int $count
     * @return array
     */
    public function getRandomWords($count)
    {
        $words = array();

        for ($i = 0; $i < $count; $i++) {
            $word = $this->words[array_rand($this->words)];
            if ($i > 0 && $words[$i - 1] === $word) {
                $i--;
                continue;
            }

            $words[] = $word;
        }

        return $words;
    }

    /**
     * Get an array of sentences
     *
     * @param int $count
     * @return array
     */
    public function getSentences($count)
    {
        $sentences = array();

        for ($i = 0; $i < $count; $i++) {
            $wordCount = (int) Statistics::gauss_ms($this->sentenceMean, $this->sentenceStDev);
            $sentence = $this->getRandomWords($wordCount);
            $sentences[] = $this->toSentence($sentence);
        }

        return $sentences;
    }

    /**
     * Get an array of paragraphs
     *
     * @param $count
     * @return array
     */
    public function getParagraphs($count)
    {
        $paragraphs = array();

        for ($i = 0; $i < $count; $i++) {
            $number = Statistics::gauss_ms($this->paragraphMean, $this->paragraphStDev);
            $number = ($number < 1) ? 1 : $number;
            $sentences = $this->getSentences($number);
            $paragraphs[] = implode(' ', $sentences);
        }

        return $paragraphs;
    }

    /**
     * Inserts commas and periods in the given
     * word array and capitalises first letter.
     *
     * @param array $sentence
     * @return string
     */
    protected function toSentence(array $sentence)
    {
        $count = count($sentence);
        $sentence[$count - 1] = $sentence[$count - 1] . '.';
        $sentence[0] = ucfirst($sentence[0]);

        if ($count < 4) {
            return implode(' ', $sentence);
        }

        $commas = $this->numberOfCommas($count);

        for ($i = 1; $i <= $commas; $i++) {
            $index = (int) round($i * $count / ($commas + 1));

            if ($index < ($count - 1) && $index > 0) {
                $sentence[$index] = $sentence[$index] . ',';
            }
        }

        return implode(' ', $sentence);
    }

    /**
     * Determines the number of commas for a
     * sentence of the given length. Average and
     * standard deviation are determined superficially
     *
     * @param int $len
     * @return int
     */
    protected function numberOfCommas($len)
    {
        $avg = log($len, 6);
        $stdDev = $avg / 6.000;

        return (int) round(Statistics::gauss_ms($avg, $stdDev));
    }
}