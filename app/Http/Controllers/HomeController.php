<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    /**
     * Pre launch day landing launch page.
     */
    public function comingSoon()
    {
        $subs = [
            'Launch day',
            'Coming soon'
        ];
        $title = env("APPLICATION_NAME") . $this->getSubtitles($subs, 'title');
        $agent = new Agent();
        $keyWords = $this->getKeywords($subs);

        $data = [
            'title' => $title,
            'keyword' => $keyWords,
        ];

        if ( $agent->isMobile() ) {

            return view('home.mobile-coming-soon')->with('data', $data);
        } else {

            return view('home.web-coming-soon')->with('data', $data);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

    public function getKeywords($subs)
    {
        return $this->getSubtitles($subs) . '' . $this->keywordText() . '' . $this->keywordLocations();
    }

    public function getSubtitles($subs, $type = 'keywords')
    {
        if ($type === 'keywords') {
            return join(",\n\r", $subs);
        } else {
            return ' - ' . join(" | ", $subs);
        }
    }

    public function keywordText()
    {
        $text = [
            'tntmedia1111',
            '1111',
            'launch',
            'Launch day',
            'tnt digital',
            'tnt.com',
            'tnt.co.uk',
            'tnt media tech ltd',
            'tnt media tech limited',
            'TNT Media',
            'TNT Express',
            'TNT Digital',
            'TNT Direct',
            'TNT News',
            'tnt',
            'TNT Digital',
            'news',
            'marketing',
            'seo',
            'target ad',
            'digital marketing',
            'affiliate marketing',
            'social media marketing',
            'marketing strategy',
            'email marketing',
            'marketing plan',
            'advertising agency',
            'internet marketing',
            'digital marketing course',
            'e marketing',
            'seo services',
            'direct marketing',
            'digital marketing agency',
            'seo company',
            'what is digital marketing',
            'b2b marketing',
            'marketing online',
            'marketing agency',
            'social marketing',
            'marketing research',
            'web marketing',
            'online advertising',
        ];

        return join(",\n\r", $text);
    }

    public function keywordLocations()
    {
        $locations = [
            'Chatham',
            'Kent',
            'Essex',
            'Maidstone',
            'Oliver Close',
            'Canterbury',
            'London',
            'Birmingham',
            'West Midlands',
            'West Midlands',
            'Glasgow',
            'Scotland',
            'Liverpool',
            'Merseyside',
            'North West',
            'Bristol',
            'Bristol',
            'South West',
            'Manchester',
            'Greater Manchester',
            'North West',
            'Sheffield',
            'South Yorkshire',
            'Yorkshire Humber',
            'Leeds',
            'West Yorkshire',
            'Yorkshire Humber',
            'Edinburgh',
            'Scotland',
            'Leicester',
            'Leicestershire',
            'East Midlands',
            'Coventry',
            'West Midlands',
            'Bradford',
            'West Yorkshire',
            'Yorkshire Humber',
            'Cardiff',
            'South Glamorgan',
            'Wales',
            'Belfast',
            'County Antrim',
            'County Down',
            'Northern Ireland',
            'Nottingham',
            'Nottinghamshire',
            'East Midlands',
            'Kingston upon Hull',
            'East Riding of Yorkshire',
            'Yorkshire Humber',
            'Newcastle upon Tyne',
            'Tyne and Wear',
            'North East',
            'Stoke-on-Trent',
            'Staffordshire',
            'West Midlands',
            'Southampton',
            'Hampshire',
            'South East',
            'Derby',
            'Derbyshire',
            'East Midlands',
            'Portsmouth',
            'Hampshire',
            'South East',
            'Brighton',
            'East Sussex',
            'South East',
            'Plymouth',
            'Devon',
            'South West',
            'Northampton',
            'Northamptonshire',
            'East Midlands',
            'Reading',
            'Berkshire',
            'South East',
            'Luton',
            'Bedfordshire',
            'East',
            'Wolverhampton',
            'West Midlands',
            'Bolton',
            'Greater Manchester',
            'North West',
            'Aberdeen',
            'Bournemouth',
            'Dorset',
            'South West',
            'Norwich',
            'Norfolk',
            'East',
            'Swindon',
            'Wiltshire',
            'South West',
            'Swansea',
            'West Glamorgan',
            'Wales',
            'Milton Keynes',
            'Buckinghamshire',
            'South East',
            'Southend-on-Sea',
            'Essex',
            'East',
            'Middlesbrough',
            'North Yorkshire',
            'Yorkshire Humber',
            'Peterborough',
            'Cambridgeshire',
            'East',
            'Sunderland',
            'Tyne and Wear',
            'North East',
            'Warrington',
            'Cheshire',
            'North West',
            'Huddersfield',
            'West Yorkshire',
            'Yorkshire Humber',
        ];

        return join(",\n\r", $locations);
    }
}
