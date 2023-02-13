<?php

namespace Database\Seeders;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'id'=> 1,
            'vservice_id'=>'1',
            'name'=> 'Dunia Pengantin Malaysia',
            'price'=> 8750.00,
            'description'=> 'PAKEJ KAHWIN 200PAX CATERING DI VILLA MEWAH‼ APA YANG DISERTAKAN: 5 JAM EVENT,VILLA MEWAH GOLF CLUB,PERCUMA PELAMIN,200 PAX CATERING,KELENGKAPAN SAJIAN,MAKAN BERADAB,PA SYSTEM,RED CARPET,DECO PINTU GERBANG,BILIK PENGANTIN BERSIAP',
            'phone'=>'0185784920',
            'address'=> 'Bandar Tasik Puteri, Rawang Selangor',
            'fb'=> 'Dunia Pengantin Malaysia',
            'insta'=>'@DuniaPengantinMalaysia',
            'image'=> 'https://scontent.fkul4-2.fna.fbcdn.net/v/t39.30808-6/241169474_308225014396923_4147951277694433371_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=e3f864&_nc_ohc=x9ENbNrHyiAAX9rz2b6&_nc_ht=scontent.fkul4-2.fna&oh=00_AT-VU_Ck9pgtEHS6MF7VjMbHekLEK4y0A1HCtjXm4ivnkg&oe=62FF91B0',
            'category_id'=>8,
            'state_id'=>1
        ]);

        Service::create([

            'id'=> 2,
            'vservice_id'=>'1',
            'name'=> 'SueHashim Boutique & Wedding Event',
            'price'=> 2399.00,
            'description'=> 'DESIGN BOLE DISKUS BERSAMA.. DESIGN ADALAH DARI PIHAK BUTIK...Free :- Pelamin Dewan 20ft - 30ft,FREE BUSANA SANDING LP #readymade termasuk aksesori lengkap LP...,entrance deco,walkway 8tiang,red carpet 25meter',
            'phone'=>'0123494957',
            'address'=>  '21-2 Jalan Nautika A/20A, Pusat Komersial TSB,40160, Sungai Buloh, Selangor' ,
            'fb'=> 'SueHashim Boutique & Wedding Event',
            'insta'=>'suehashim_boutique',
            'image'=> 'https://scontent.fkul5-1.fna.fbcdn.net/v/t1.6435-9/78762798_102898751211073_4667097620601110528_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGh8axVCKAEIxnrkmYFNLKDP7pTo1OdoTU_ulOjU52hNdXIgx0d4fhr8cMQdkv7HjbO8-LxTuAquSMDgZioW5Bm&_nc_ohc=_kHeRncAP-wAX9ZgDNb&_nc_ht=scontent.fkul5-1.fna&oh=00_AT-Us_P1pamtOleiv3d-BMia7WmhRTtcBqB6P2mZuf5Ulg&oe=63102111',
            'category_id'=>8,
            'state_id'=>1

        ]);

        Service::create([
            'id'=> 3,
            'vservice_id'=>'1',
            'name'=> 'Pelamin Mini Selangor & KL',
            'price'=> 1500.00,
            'description'=>'Pelamin mini,pelamin nikah,pelamin tunang,pelamin sanding,pelamin berendoi',
            'phone'=>'0193704097',
            'address'=>  'Jalan Tenteram 4, Taman Kajang Utama, 43000 Kajang, Selangor' ,
            'fb'=> 'Pelamin Mini Selangor & KL',
            'insta'=>'@eventbysafura',
            'image'=> 'https://scontent.fkul5-1.fna.fbcdn.net/v/t39.30808-6/241640529_581225886560001_7103210658657458134_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGEs3K_e7eQB2yhHJo4JyLmSI7aqMl44TZIjtqoyXjhNiHw1guhEJjF3YRaUYjE0MFb8clwrJbBOQT8n6hMARbv&_nc_ohc=l9k2iGtaPfkAX87IIAK&tn=q340wMwteBbFvZ1a&_nc_zt=23&_nc_ht=scontent.fkul5-1.fna&oh=00_AT8oo39pEtMEojMq1D94YkvV4kJlkPc2FLwXsFg6k5-UvQ&oe=62EDD383',
            'category_id'=>1,
            'state_id'=>1
        ]);
        Service::create([
            'id'=> 4,
            'vservice_id'=>'1',
            'name'=> 'Puan Rita Rahman',
            'price'=> 500.00,
            'description'=>'Wedding Makeup, Makeup Nikah / Sanding,Harha Termasuk Pakaikan tudung+veil, Tidak termasuk transport, Tidak termasuk hairdo',
            'phone'=>'0163614177',
            'address'=>'no.48, jalan subang permai U6/8, Shah Alam, Malaysia',
            'fb'=> 'RitaaRahmanmakeup',
            'insta'=>'puanritarahman',
            'image'=> 'https://scontent.fkul5-2.fna.fbcdn.net/v/t39.30808-6/272744687_10228431563792644_1080475945812423419_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGUg_dfVVeQ8QU2DZrW11xhLrp_NKYVPmguun80phU-aAyr_ag5CugykpyEPXwtnbIeYyLLhE800kkFqPzUvUG2&_nc_ohc=iTTmtuQ4Ah4AX-0G1pD&_nc_zt=23&_nc_ht=scontent.fkul5-2.fna&oh=00_AT8NnHQ0NC8IN1WEi2KfAOScxOXnd_YEDMZOybGCBfXMCQ&oe=62ED487E',
            'category_id'=>2,
            'state_id'=>4
        ]);

        Service::create([
            'id'=> 5,
            'vservice_id'=>'1',
            'name'=> 'Katering Seremban',
            'price'=> 3000.00,
            'description'=>'QISYAS WEDDING & EVENT PLANNER. Katering Profesional di seluruh Negeri Sembilan..Berpengalaman luas menyediakan pelbagai majlis perkahwinan, korporat, kenduri, pertunangan, hi tea dll ',
            'phone'=>'0123406666',
            'address'=>'758, Jalan Forest Heights 4/7, Taman Dato Shah Bandar, 70450 Seremban, Negeri Sembilan',
            'fb'=> 'Katering Seremban',
            'insta'=>'@qisyaweddingplanner',
            'image'=> 'https://scontent.fkul5-2.fna.fbcdn.net/v/t39.30808-6/287741065_2107245712780827_4250503845276644914_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeEDbDxJjTWn0HsTus7IjSWjTAG3unnoXl5MAbe6eeheXlmWIDxX-PmH-628MwtEYpyT0udcep9bIBDgSRM4n9Hr&_nc_ohc=_Q_ue1Bor4oAX9D9Pjr&_nc_zt=23&_nc_ht=scontent.fkul5-2.fna&oh=00_AT8z7izXD88h_jkkM4iS7iYds378yd_Z2xlZ4chDFu9XPA&oe=62ED9E05',
            'category_id'=>6,
            'state_id'=>2
        ]);

        Service::create([
            'id'=> 6,
            'vservice_id'=>'1',
            'name'=> 'Boathouse',
            'price'=> 3150.00,
            'description'=>'Event space built with Colonial inspired architecture in composing today’s modern luxuries and stylish innovations..Let your events or wedding be memorable at our signature Glasshouse & Digital Dome',
            'phone'=>'0177066044',
            'address'=>'Boathouse - Event Space & Event Venues in KL, 5, Tasik Ampang, Jalan, 68000 Ampang Jaya, Selangor',
            'fb'=> 'Boathouse',
            'insta'=>'boathouse.my',
            'image'=> 'https://scontent.fkul4-2.fna.fbcdn.net/v/t39.30808-6/278090392_327229596169604_2792572846457466081_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeErllskhsOp8x48aY5VgECGjdXOt-tok-SN1c6362iT5GySJYyIk0fFGQhl-QzMUh2xWihE1_qM5wAy2JbB21N6&_nc_ohc=ztQpCXuoqm8AX9_1-19&_nc_ht=scontent.fkul4-2.fna&oh=00_AT84rermt5H3Q_4olHqurhirOI70IVhtr4AAxg5PAMW9Ew&oe=62F2E1C4',
            'category_id'=>7,
            'state_id'=>1
        ]);
        Service::create([
            'id'=> 7,
            'vservice_id'=>'1',
            'name'=> 'Didiq Zain',
            'price'=> 500.00,
            'description'=>'Photographer profesional.',
            'phone'=>'0198885722',
            'address'=>'Kuching, Malaysia',
            'fb'=> 'Didiq Zain',
            'insta'=>'@ZainDidiq',
            'image'=> 'https://scontent.fkul4-2.fna.fbcdn.net/v/t39.30808-6/297027160_3667533826810986_7990337931011925487_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeE59kHg5xmdSxobgRIbtg2Jxk4F0FbOc3nGTgXQVs5zeW1J-huaHjt1ic12ZfHT3ogxBAZP8ZG9DO0_JngcAydN&_nc_ohc=KJH94ZoxwJgAX8muWP9&_nc_ht=scontent.fkul4-2.fna&oh=00_AT_r1m0n_MhKLXBA410MoMVDL06szKL0uRlLVIiywgIwMw&oe=62F31472',
            'category_id'=>3,
            'state_id'=>13
        ]);
        Service::create([
            'id'=> 8,
            'vservice_id'=>'1',
            'name'=> 'Iqbal Decorator',
            'price'=> 1300.00,
            'description'=>'As a company, RUANG, specializes in providing a event spaces for occasions such as weddings, meetings, brainstorming sessions, exhibitions and more!! They pride themselves in offering affordable packages for wedding events.. Ruang only caters to Malay weddings which are held in their Shah Alam venue.',
            'phone'=>'0111260424',
            'address'=>'Kuching, Malaysia',
            'fb'=> 'Iqbal Ismail Decorator',
            'insta'=>'@iqbalismail.royal',
            'image'=> 'https://scontent.fkul4-3.fna.fbcdn.net/v/t1.18169-9/26231601_529679960751256_2562346711946782114_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeHqXEtiET3dhVBzk_XYSKmBMZ0GFxitHVkxnQYXGK0dWRrdXeJNcA9deFdUiVwsnFGol2c3x5ekjVjjOebUSdEf&_nc_ohc=tnMbGB13NTYAX_7IG9E&_nc_ht=scontent.fkul4-3.fna&oh=00_AT8oAUCgxHKT5lnfZGOF6t1kGzrT9EqZl_A_JEDugH_JwQ&oe=6312F6FC',
            'category_id'=>1,
            'state_id'=>13
        ]);
        Service::create([
            'id'=> 9,
            'vservice_id'=>'1',
            'name'=> 'Precious Moments Wedding Planner',
            'price'=> 4300.00,
            'description'=>'wedding packages,wedding banquet planning,events planner',
            'phone'=>'0123173929',
            'address'=>'7 Jalan Kia Peng, Kuala Lumpur',
            'fb'=> 'Precious Moments Wedding Planner Malaysia',
            'insta'=>'@pmweddings.my',
            'image'=> 'https://lh5.googleusercontent.com/p/AF1QipOzcF1UrvaXyl8Rd6raUElQojnaqDBbX5nZTci1=w296-h168-n-k-no',
            'category_id'=>8,
            'state_id'=>1
        ]);
        Service::create([
            'id'=> 10,
            'vservice_id'=>'1',
            'name'=> 'Sangkot Garden',
            'price'=> 12400.00,
            'description'=>'Sangkot Garden is a garden wedding event venue that is set amidst a Malay village that’s perfect for a traditional Malay wedding. This is an event venue that’s an antithesis of the concrete and industrial setting that’s favoured by city folks. It is as authentic as you can get where a garden wedding or event is concerned. Fresh air, greens all around you, sun from above. It’s certainly not a garden within a glasshouse but a real garden that is outdoors. Apart from weddings, the operators are adding a hotspring traditional village spa and Malay healing treatments to their offerings.',
            'phone'=>'0126025382',
            'address'=>'Sangkot Tree, Bt 16 Dusun Tua Paya Seberang',
            'fb'=> 'Sangkot The Garden Event Place',
            'insta'=>'@sangkotplace',
            'image'=> 'https://scontent.fkul4-4.fna.fbcdn.net/v/t1.6435-9/120241290_3672233472841845_2144480477192342294_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a26aad&_nc_eui2=AeHrdsdtecH8MQNXuDc_HuerCGZE04Sz77sIZkTThLPvu68NFwFBivgFr2uVQj8pLQiLoe5qpmcZ50rshd1QrGBI&_nc_ohc=q0IPBwunnxwAX_1Frqo&_nc_ht=scontent.fkul4-4.fna&oh=00_AT82aLO6a3H5UZg8cuZ1plDcmwMMNyRH51hmY2tuBViA3g&oe=63133D98',
            'category_id'=>7,
            'state_id'=>1
        ]);
        Service::create([
            'id'=> 11,
            'vservice_id'=>'1',
            'name'=> 'Katering Murah By Sha - Seremban',
            'price'=> 3400.00,
            'description'=>'500 PAX (FULL PACKAGE) Kepada bakal pengantin yang ambil PAKEJ 500 pax dengan kami 🙂 ..boleh pakai BAJU BARU mengikut design dan pilihan warna sendiri..bebas nak pilih yang macam mana..mengikut bajet yang sedia ada..takda hidden charge..Baju baru utk lelaki dan perempuan...design boleh pilih,colour boleh pilih,Baju Ikut size badan',
            'phone'=>'0189536623',
            'address'=>'Taman Bukit Temiang, 70200 Seremban, Negeri Sembilan',
            'fb'=> 'Katering Murah By Sha - Seremban',
            'insta'=>'@kateringmurahsha',
            'image'=> 'https://scontent.fkul5-2.fna.fbcdn.net/v/t39.30808-6/258149460_458466728976283_4175921374355851690_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=0debeb&_nc_eui2=AeE2soIj3ZLMhVKQXjJFZN3wR4yfpSeAvPlHjJ-lJ4C8-W1HP39lDZsib5uXKp9Ttr6Gq5md-MdW94qwwt-84Xef&_nc_ohc=pPmJJcUiJmQAX9zz_ue&_nc_zt=23&_nc_ht=scontent.fkul5-2.fna&oh=00_AT8-4je_Qbd1ltSbITi9bfOhew3PhT2vhLbhyenStnsIYg&oe=62EE688B',
            'category_id'=>9,
            'state_id'=>2
        ]);
        Service::create([
            'id'=> 12,
            'vservice_id'=>'1',
            'name'=> 'The Raw Note Entertainment',
            'price'=> 2000.00,
            'description'=>'The Raw Note Entertainment has all the best live wedding bands in town. Through the years, The Raw Note has been offering excellent stage performances from live bands and emcees for weddings, corporate events, product launchings and private functions.Established in 2009, The Raw Note Entertainment is a talent agency based in Klang Valley, and travelling all around in Malaysia and overseas. Specializing in live wedding entertainment, The Raw Note Entertainment hires only the best musicians and emcees. On top of that, The Raw Note Entertainment also provides sound system and lightings rental, not forgetting other talents like magicians, dancers, and DJs etc.',
            'phone'=>'0162070957',
            'address'=>'18, Jalan Damai Perdana 1/8, Bandar Damai Perdana, 56000 Balakong, Wilayah Persekutuan Kuala Lumpur',
            'fb'=> 'The Raw Note',
            'insta'=>'@weddinglivebandtherawnote ',
            'image'=> 'https://www.therawnote.com/wp-content/uploads/home_ourstory.jpg',
            'category_id'=>5,
            'state_id'=>3
        ]);
        Service::create([
            'id'=> 13,
            'vservice_id'=>'1',
            'name'=> 'Instinct Music',
            'price'=> 1500.00,
            'description'=>'Tet the best artist and wedding band in Malaysia for your Big Day and other celebrations! Instinct Music is home to talented artists and musicians that can provide you with versatility and top-rated performances.,Extremely talented and versatile musicians and artists,Reasonable talent fees,Flexible time packages,Ability to cater to different events and celebrations',
            'phone'=>'0146604377',
            'address'=>'KL',
            'fb'=> 'Wedding Live Band - Happy Fish Production',
            'insta'=>'',
            'image'=> 'https://www.weddingliveband.com.my/wp-content/uploads/2020/04/violinist-min.jpg',
            'category_id'=>4,
            'state_id'=>3
        ]);
        Service::create([
            'id'=> 14,
            'vservice_id'=>'1',
            'name'=> 'Fiena FZ',
            'price'=> 500.00,
            'description'=>'Accept any cake order for wedding or any events',
            'phone'=>'0109661769',
            'address'=>'Kuching,Sarawak',
            'fb'=> 'Fiena FZ',
            'insta'=>'@fiena.fz',
            'image'=> 'https://scontent.fkul4-3.fna.fbcdn.net/v/t39.30808-6/271920585_4727791143955790_5468288031994902666_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFVeVu5XSXT-Ws-okxfdhYmraCUj-6O6eqtoJSP7o7p6uIKChOpGPpBuDlzX7UmYnXju0Gz6hgxybcGjCf60J9E&_nc_ohc=o3E1xiNSPUUAX83-DSQ&_nc_ht=scontent.fkul4-3.fna&oh=00_AT81DC7zBTeTPg-ZUJVL7ogaRkRhJZCXIUHvP7gxCqF8kQ&oe=62F340A1',
            'category_id'=>10,
            'state_id'=>13
        ]);
        Service::create([
            'id'=> 15,
            'vservice_id'=>'1',
            'name'=> 'Sweet Summer Event Planner Sandakan',
            'price'=> 2500.00,
            'description'=>'Wedding planning service',
            'phone'=>'0178171715',
            'address'=>'Sandakan,Sabah',
            'fb'=> 'Sweet Summer Event Planner Sandakan',
            'insta'=>'@sweetsummer.my',
            'image'=> 'https://scontent.fkul4-4.fna.fbcdn.net/v/t39.30808-6/294650662_2643699075763017_5361633021895246748_n.jpg?stp=dst-jpg_s600x600&_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHZbhqRgefXIkiLFPf3CUSQUAKoZ7vcdnZQAqhnu9x2dl6cvC8UR8tuygSdZTkp60QLQU8FNhrrkmG8f2S80wgd&_nc_ohc=yty4btJUCjwAX_JfnMk&_nc_ht=scontent.fkul4-4.fna&oh=00_AT8GHD3sXEaEup3-rSzx_azA_mZ0600M1Sexnuif5wHBhw&oe=62F252DC',
            'category_id'=>9,
            'state_id'=>12
        ]);
        Service::create([
            'id'=> 16,
            'vservice_id'=>'1',
            'name'=> 'The Balairong - Exclusive Wedding Venue',
            'price'=> 9500.00,
            'description'=>'Dewan tema taman untuk majlis-majlis sperti majlis perkahwinan, majlis pertunangan, majlis harijadi, majlis reunion, majlis hari keluarga dan lain-lain...',
            'phone'=>'0172645508',
            'address'=>'Sandakan,Sabah',
            'fb'=> 'The Balairong - Exclusive Wedding Venue',
            'insta'=>'@balairongweddingvenue',
            'image'=> 'https://scontent.fkul4-3.fna.fbcdn.net/v/t1.6435-9/44215895_548163962273132_4864130641169481728_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeG3-Z4LdAVinyyl_Mhk5urvfPY7g2eiGPJ89juDZ6IY8vDot-8D04eFzhEGmgfswEC1HiBJxUejDbYKJRvOELK6&_nc_ohc=mb3Pc-L_YhoAX9DMvo1&tn=q340wMwteBbFvZ1a&_nc_ht=scontent.fkul4-3.fna&oh=00_AT-p_ILksSK9WkGWbRvjSuqZIVvRUh2xtSp-Qp5AF92HIg&oe=631242DB',
            'category_id'=>9,
            'state_id'=>3
        ]);
    }
}
