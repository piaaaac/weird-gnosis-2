<?php

$stringA = <<<EOD
Request URL: https://cdn.sketchapp.com/docs/shapes/transform@2x.mp4
	Request Method: GET
Status Code: 206  (from disk cache)
Remote Address: [2606:4700:3032::6815:b5f]:443
Referrer Policy: no-referrer-when-downgrade
alt-svc: h3-27=":443"; ma=86400, h3-28=":443"; ma=86400, h3-29=":443"; ma=86400
cache-control: max-age=691200
cf-cache-status: MISS
cf-ray: 63f3798aeb7b3752-MXP
cf-request-id: 096c0a4ad40000375247a3c000000001
Content-Length: 101716
Content-Range: bytes 819200-920915/920916
content-type: video/mp4
date: Tue, 13 Apr 2021 08:55:20 GMT
etag: "eead8a1111d57e498633070ee99b574d"
expect-ct: max-age=604800, report-uri="https://report-uri.cloudflare.com/cdn-cgi/beacon/expect-ct"
last-modified: Wed, 13 Nov 2019 12:10:00 GMT
nel: {"report_to":"cf-nel","max_age":604800}
report-to: {"group":"cf-nel","endpoints":[{"url":"https:\/\/a.nel.cloudflare.com\/report?s=4l3pESI8UwrtA1o0uL1tkmLH1ENL76PRrWVyAEDloGIxM5ndjT0ZzjHiWBxcE7JLxJXN7%2FaxRiKncZPn0CK538R64MG4wB%2FWGv8JPhx66tJSGDV4DTzNy%2BtnPzMW4g%3D%3D"}],"max_age":604800}
server: cloudflare
vary: Accept-Encoding
x-amz-id-2: sEvcsA9mcU1I8LY+qiUv8EZqp3TiwWe6uU8S3w1qb7RilzoZdrcF3d0OZHQeK+pttE8AjAG+AaQ=
x-amz-request-id: QEHA0M9VD49H4GB5
x-amz-version-id: NIKUfzWCyGkP_jQyYEUUg18PF4YPWCWh
Provisional headers are shown. Disable cache to see full headers.
Accept-Encoding: identity;q=1, *;q=0
Range: bytes=819200-
Referer: https://www.sketch.com/docs/shapes/
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_16_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36
EOD;

$stringB = <<<EOD
s=\"face\"&gt;
	      	&lt;?= substr(fuckupString($stringA01, 5), 0, 600) ?&gt;
	      	&lt;img class=\"small\" src=\"http://www.lliisstt.it/3.0/media/pages/items/tight-media/4109106458-1618299197/pasted-img-1065839.jpg\" /&gt;
	      	&lt;?= fuckupString($stringA01, 30) ?&gt;
	      	&lt;img class=\"small\" src=\"http://www.lliisstt.it/3.0/media/pages/items/machine-learning-landscapes/3155032481-1615218643/pasted-img-55528712.jpg\" /&gt;
	      	&lt;?= fuckupString($stringA02, 30) ?&gt;
      	&lt;/div&gt;
	      &lt;div id=\"face-right\" class=\"face\"&gt;
	      	&lt;?= substr(fuckupString($stringA01, 50), 0, 170) ?&gt;
	      	&lt;a href=\"https://policies.google.com/terms?hl=en-US\"&gt;https://policies.google.com/terms?hl=en-US&lt;/a&gt;
	      	&lt;a href=\"https://www.facebook.com/terms.php\"&gt;https://www.facebook.com/terms.php&lt;/a&gt;
	      	&lt;a href=\"https://policies.google.com/terms?hl=en-US\"&gt;https://policies.google.com/terms?hl=en-US&lt;/a&gt;
	      	&lt;a href=\"https://policies.google.com/terms?hl=en-US\"&gt;https://policies.google.com/terms?hl=en-US&lt;/a&gt;
	      	&lt;a href=\"https://policies.google.com/terms?hl=en-US\"&gt;https://policies.google.com/terms?hl=en-US&lt;/a&gt;
	      	&lt;?= fuckupString($stringA02, 60) ?&gt;
	      	&lt;img class=\"small\" src=\"http://www.lliisstt.it/3.0/media/pages/items/networks-points-etc/3635930643-1573388157/pasted-img-43070474.jpg\" /&gt;
	      	&lt;?= fuckupString($stringA02, 6) ?&gt;
      	&lt;/div&gt;
	      &lt;div id=\"face-top\" class=\"face\"&gt;
	      	&lt;?= fuckupString(fuckupString($stringA02, 100), 100) ?&gt;
	      	&lt;a href=\"https://policies.google.com/terms?hl=en-US\"&gt;https://policies.google.com/terms?hl=en-US&lt;/a&gt;
	      	&lt;?= str_repeat(\"- - - - - &\", 2500) ?&gt;
	      	&lt;a href=\"https://policies.google.com/terms?hl=en-US\"&gt;https://policies.google.com/terms?hl=en-US&lt;/a&gt;
	      	&lt;?= fuckupString(fuckupString($stringA02, 100), 100) ?&gt;
	      	&lt;?= fuckupString(fuckupString($stringA02, 100), 100) ?&gt;
      	&lt;/div&gt;
	      &lt;div id=\"face-bottom\" class=\"face\"&gt;
	      	&lt;?= fuckupString($stringA02, 100) ?&gt;
      	&lt;/div&gt;
	    &lt;/div&gt;
    &lt;/div&gt;

		&lt;script type=\"text/javascript\"&gt;
			
			var space = document.getElementById(\"space\");
			var room = document.getElementById(\"room\");
			var fFront = document.getElementById(\"face-front\");
			var fBack = document.getElementById(\"face-back\");
			var fLeft = document.getElementById(\"face-left\");
			var fRight = document.getElementById(\"face-right\");
			var fTop = document.getElementById(\"face-top\");
			var fBottom = document.getElementById(\"face-bottom\");
			var w = window.innerWidth;
			var h = window.innerHeight;

			space.addEventListener(\"mousemove\", (e) =&gt; {
        var mouseX = e.clientX;
        var mouseY = e.clientY;
EOD;

$stringC = <<<EOD
Features
Features are a use of the data that you have already agreed to share with us

Match and combine offline data sources
Vendors can:

•
Combine data obtained offline with data collected online in support of one or more Purposes or Special Purposes.

VEXPRO TECHNOLOGIES LTD

PROXISTORE

Permodo GmbH

BeeswaxIO Corporation

Bombora Inc.

DeepIntent, Inc.

RevJet

Publicis Media GmbH

Salesforce.com, Inc.

Digiseg ApS

Zeta Global

EASYmedia GmbH

IPONWEB GmbH

Rebold Marketing & Communication SLU

Next Media

Sonobi, Inc

Blis Media Limited

xAd, Inc. dba GroundTruth

Unruly Group Ltd

BIDSWITCH GmbH

Inspired Mobile Limited

Near Pte Ltd

INFINIA MOBILE S.L.

AdTheorent, Inc

Fido S.r.l

Deutsche Post AG

XChange by SFBX:registered:

Location Sciences AI Ltd.

Bucksense Inc

StackAdapt

Quantyoo GmbH & Co. KG

Dugout Limited

UAB Aktyvus sektorius - Eskimi

TabMo SAS

CentralNic Poland sp. z o.o.

comScore, Inc.

Free Stream Media Corp. dba Samba TV

Yieldlab AG

Beachfront Media LLC

Sizmek by Amazon

Signal Digital Inc.

InMobi Pte Ltd

Targetspot Belgium SPRL

travel audience GmbH

Telaria SAS

Epsilon

LeadsRx, Inc.

Fandom, Inc.

Cuebiq

Kairos Fire

Impact Tech Inc.

LiveRamp, Inc.

Audience Solutions S.A.

Telaria, Inc

mediarithmics SAS

AdGear Technologies, Inc.

Commanders Act

ADITION technologies AG

adMarketplace, Inc.

Emerse Sverige AB

GDMServices, Inc. d/b/a FiksuDSP

Arkeero

The MediaGrid Inc.

Google Advertising Products

NEURAL.ONE

Smartme Analytics

Crimtan Holdings Limited

GfK SE

Kubient Inc.

B2B Media Group EMEA

GlobalWebIndex

AdMaxim Inc.

Cydersoft

Exponential Interactive, Inc d/b/a VDX.tv

Appier PTE Ltd

Jivox Corporation

LoopMe Limited

SINGLESPOT SAS

Lucid Holdings, LLC

Taboola Europe Limited

United Internet Media GmbH

Click Tech Limited

NOW GmbH

Showheroes SE

Zemanta, Inc.

Justtag Sp. z o.o.

BusinessClick

The ADEX GmbH

MediaMath, Inc.

Proxi.cloud sp. z.o.o

Adevinta Spain S.L.U.

OnAudience Ltd

ADARA MEDIA UNLIMITED

Global Media & Entertainment Limited

1020, Inc. dba Placecast and Ericsson Emodo

Ermes

YouGov

Teemo SA

Weborama

Sojern, Inc.

Quantcast International Limited

Cxense ASA

The Kantar Group Limited

Kameleoon SAS

Skaze

Czech Publisher Exchange z.s.p.o.

Roku Advertising Services

BEINTOO SPA

AerServ LLC

Sovrn Holdings Inc

Acxiom

A.Mob

AUDIOMOB LTD

Spolecznosci Sp. z o.o. Sp. k.

HyperTV Inc.

Notify

The Trade Desk

Goldbach Group AG

Mobsuccess

THE NEWCO S.R.L.

Knorex

TAPTAP Digital SL

Viralize SRL

Norstat AS

Bounce Exchange, Inc

Mindlytix SAS

Online Solution

adsquare GmbH

NextRoll, Inc.

Verizon Media EMEA Limited

Cint AB

UberMedia, Inc.

Outbrain UK Ltd

Eyeota Pte Ltd

Admixer EU GmbH

BILENDI SA

On Device Research Limited

TrueData Solutions, Inc.

Audienzz AG

Sportradar AG

Accorp Sp. z o.o.

INVIBES GROUP

INNITY

SMARTSTREAM.TV GmbH

Audiens S.r.l.

Sirdata

GRAPHINIUM

AddApptr GmbH

Cloud Technologies S.A.

Smartclip Hispania SL

White Ops, Inc.

Delidatax SL

Eulerian Technologies

NeuStar, Inc.

ADRENALEAD

DIGITEKA Technologies

Neodata Group srl

Nielsen LLC

Alliance Gravity Data Media

numberly

Experian Limited

OpenWeb LTD

MARKETPERF CORP

DynAdmic

emetriq GmbH

Predicio

Reveal Mobile Inc

Amobee Inc.

Permutive Technologies, Inc.

Bmind a Sales Maker Company, S.L.

Kayzen

digitalAudience

AudienceProject Aps

Nielsen Marketing Cloud

Programatica de publicidad S.L.

Noster Finance S.L.

MiQ

mobalo GmbH

Hybrid Adtech GmbH

ORTEC B.V.

Mediakeys Platform

Next Media SRL

TreSensa Technologies, Inc.

INVIDI technologies AB

Dentsu Aegis Network Italia SpA

Oracle Data Cloud

VECTAURY

Goodway Group, Inc.

TX Group AG

Wizaly

SOMQUERY SOMTAG - (SevenOne Media)

Permutive Limited

Avocet Systems Limited

Triple13 Ltd

Active Agent (ADITION technologies AG)

OneTag Limited

ShareThis, Inc

ZBO Media

Samba TV UK Limited

Adform

RhythmOne DBA Unruly Group Ltd

Neustar on behalf of The Procter & Gamble Company

Jellyfish France

Realeyes OU

BritePool Inc

Smadex SL

Dynata LLC

Listonic Sp. z o.o.

PLAYGROUND XYZ EMEA
LTD

Smart Traffik

Carbon (AI) Limited

Rakuten Marketing LLC

EMX Digital LLC

adality GmbH

PowerLinks Media Limited

RMSi Radio Marketing Service interactive GmbH

PubMatic, Inc.

Flashtalking, Inc.

Ströer SSP GmbH (DSP)

Clinch Labs LTD

Adhese

Radio Net Media Limited

Anzu Virtual Reality LTD

Kochava Inc.

Pinpoll GmbH

6Sense Insights, Inc.

AdQuiver Media SL

Bidtellect, Inc

Criteo SA

Beaconspark Ltd

adbility media GmbH

NC Audience Exchange, LLC (NewsIQ)

1plusX AG

AdClear GmbH

AdsWizz Inc.

GroupM UK Limited

Mediavine, Inc.

zeotap GmbH


Link different devices
Vendors can:

•
Deterministically determine that two or more devices belong to the same user or household
•
Probabilistically determine that two or more devices belong to the same user or household
•
Actively scan device characteristics for identification for probabilistic identification if users have allowed vendors to actively scan device characteristics for identification (Special Feature 2)

VEXPRO TECHNOLOGIES LTD

PROXISTORE

Permodo GmbH

DeepIntent, Inc.

Blue

Publicis Media GmbH

Salesforce.com, Inc.

Zeta Global

EASYmedia GmbH

IPONWEB GmbH

Rebold Marketing & Communication SLU

Next Media

Blis Media Limited

xAd, Inc. dba GroundTruth

Unruly Group Ltd

Ad Alliance GmbH

Inspired Mobile Limited

Near Pte Ltd

INFINIA MOBILE S.L.

Performax.cz, s.r.o.

AcuityAds Inc.

AdTheorent, Inc

Fido S.r.l

XChange by SFBX:registered:

Dailymotion SA

Bucksense Inc

StackAdapt

Quantyoo GmbH & Co. KG

: Tappx

Dugout Limited

UAB Aktyvus sektorius - Eskimi

BidBerry SRL

TabMo SAS

CentralNic Poland sp. z o.o.

comScore, Inc.

Free Stream Media Corp. dba Samba TV

Yieldlab AG

respondi AG

Sizmek by Amazon

Signal Digital Inc.

InMobi Pte Ltd

Targetspot Belgium SPRL

Mediasmart Mobile S.L.

travel audience GmbH

Telaria SAS

Epsilon

Inskin Media LTD

Fifty Technology Limited

LeadsRx, Inc.

Fandom, Inc.

Grabit Interactive Media Inc dba KERV Interctive

Cuebiq

LiveRamp, Inc.

Adzymic Pte Ltd

Cookie Market LTD

ucfunnel Co., Ltd.

Audience Solutions S.A.

Telaria, Inc

mediarithmics SAS

AdGear Technologies, Inc.

Ziff Davis LLC

N Technologies Inc.

Commanders Act

Widespace AB

ADITION technologies AG

Platform161

adMarketplace, Inc.

Adikteev

Emerse Sverige AB

GDMServices, Inc. d/b/a FiksuDSP

Arkeero

The MediaGrid Inc.

Nativo, Inc.

Google Advertising Products

Arrivalist Co

NEURAL.ONE

Reppublika- The Research Toolbox GmbH

GfK SE

Unilever Polska sp. z o.o.

Kubient Inc.

B2B Media Group EMEA

Azerion Holding B.V.

GlobalWebIndex

AdMaxim Inc.

Appier PTE Ltd

AuDigent

Jivox Corporation

EDGE NPD Sp. z o.o.

LoopMe Limited

SINGLESPOT SAS

Lucid Holdings, LLC

Taboola Europe Limited

United Internet Media GmbH

MindTake Research GmbH

NOW GmbH

Justtag Sp. z o.o.

BusinessClick

The ADEX GmbH

MediaMath, Inc.

Adevinta Spain S.L.U.

OnAudience Ltd

ADARA MEDIA UNLIMITED

Global Media & Entertainment Limited

Ermes

YouGov

smartclip Europe GmbH

Weborama

The Ozone Project Limited

Bidstack Limited

Sojern, Inc.

Cxense ASA

The Kantar Group Limited

Kameleoon SAS

Skaze

Czech Publisher Exchange z.s.p.o.

Roku Advertising Services

GeistM Technologies LTD

AerServ LLC

Pubfinity LLC

Sovrn Holdings Inc

Acxiom

A.Mob

AUDIOMOB LTD

Spolecznosci Sp. z o.o. Sp. k.

Golden Bees

The Trade Desk

Goldbach Group AG

Mobsuccess

THE NEWCO S.R.L.

Knorex

TAPTAP Digital SL

Audience Trading Platform Ltd.

Artefact Deutschland GmbH

ad6media

Norstat AS

Bounce Exchange, Inc

Mindlytix SAS

Online Solution

Kairion GmbH

adsquare GmbH

NextRoll, Inc.

Adpone SL

Verizon Media EMEA Limited

SheMedia, LLC

Eyeota Pte Ltd

Admixer EU GmbH

On Device Research Limited

TrueData Solutions, Inc.

Audienzz AG

Sportradar AG

Accorp Sp. z o.o.

INVIBES GROUP

INNITY

SMARTSTREAM.TV GmbH

Audiens S.r.l.

Sirdata

GRAPHINIUM

AddApptr GmbH

Cloud Technologies S.A.

Smartclip Hispania SL

Delidatax SL

Eulerian Technologies

MGID Inc.

NeuStar, Inc.

ADRENALEAD

Neodata Group srl

Nielsen LLC

Alliance Gravity Data Media

numberly

Experian Limited

OpenWeb
LTD

Haensel AMS GmbH

MARKETPERF CORP

emetriq GmbH

Predicio

Reveal Mobile Inc

IP Deutschland GmbH

Amobee Inc.

Permutive Technologies, Inc.

Bmind a Sales Maker Company, S.L.

MOVIads Sp. z o.o. Sp. k.

digitalAudience

BidTheatre AB

AudienceProject Aps

Nielsen Marketing Cloud

Programatica de publicidad S.L.

Noster Finance S.L.

MiQ

PaperG, Inc. dba Thunder Industries

Online Advertising Network Sp. z o.o.

Hybrid Adtech GmbH

Seznam.cz, a.s.

ORTEC B.V.

Mediakeys Platform

Next Media SRL

Exactag GmbH

TIMEONE PERFORMANCE

Adtriba GmbH

Simplifi Holdings Inc

INVIDI technologies AB

Dentsu Aegis Network Italia SpA

42 Ads GmbH

Oracle Data Cloud

VECTAURY

Goodway Group, Inc.

TX Group AG

Wizaly

SOMQUERY SOMTAG - (SevenOne Media)

Permutive Limited

Avocet Systems Limited

Ogury Ltd.

Active Agent (ADITION technologies AG)

OneTag Limited

ShareThis, Inc

Samba TV UK Limited

Adform

RhythmOne DBA Unruly Group Ltd

Neustar on behalf of The Procter & Gamble Company

Jellyfish France

BritePool Inc

Smadex SL

Dynata LLC

Listonic Sp. z o.o.

Miaozhen Information Technology Co. Ltd

Smart Traffik

Carbon (AI) Limited

Rakuten Marketing LLC

ADman Interactive SLU

EMX Digital LLC

FeedAd GmbH

Ingenious Technologies AG

PubMatic, Inc.

Roq.ad Inc.

Flashtalking, Inc.

Lotame Solutions, inc

Ströer SSP GmbH (DSP)

Clinch Labs LTD

Adhese

Radio Net Media Limited

Captify Technologies Limited

Kochava Inc.

6Sense Insights, Inc.

AdQuiver Media SL

Bidtellect, Inc

Criteo SA

Tapad, Inc.

WhatRocks Inc.

adbility media GmbH

NC Audience Exchange, LLC (NewsIQ)

1plusX AG

AdClear GmbH

33Across

AdsWizz Inc.

GroupM UK Limited

Mediavine, Inc.

Xandr, Inc.

zeotap GmbH

Adjust GmbH

Research and Analysis of Media in Sweden AB


Receive and use automatically-sent device characteristics for identification
Vendors can:

•
Create an identifier using data collected automatically from a device for specific characteristics, e.g. IP address, user-agent string.
•
Use such an identifier to attempt to re-identify a device.

Vendors cannot:

•
Create an identifier using data collected via actively scanning a device for specific characteristics, e.g. installed font or screen resolution without users’ separate opt-in to actively scanning device characteristics for identification.
•
Use such an identifier to re-identify a device.

VEXPRO TECHNOLOGIES LTD

PROXISTORE

BeeswaxIO Corporation

Bombora Inc.

NumberEight Technologies Ltd

DeepIntent, Inc.

Blue

Moloco, Inc.

uppr GmbH

Zeta Global

EASYmedia GmbH

IPONWEB GmbH

Rebold Marketing & Communication SLU

Next Media

Blis Media Limited

Arcspire Limited

Quality Media Network GmbH

xAd, Inc. dba GroundTruth

Market Resource Partners LLC

Unruly Group Ltd

BIDSWITCH GmbH

GumGum, Inc.

Inspired Mobile Limited

INFINIA MOBILE S.L.

AdTheorent, Inc

Fido S.r.l

Adobe Advertising Cloud

XChange by SFBX:registered:

Index Exchange, Inc.

Bucksense Inc

Vidazoo Ltd

Effiliation / Effinity

Dugout Limited

Brave People Ltd.

Axel Springer Teaser Ad GmbH

Sift Media, Inc

BidBerry SRL

TabMo SAS

Venatus Media Limited

CentralNic Poland sp. z o.o.

Free Stream Media Corp. dba Samba TV

Yieldlab AG

Beachfront Media LLC

respondi AG

Sizmek by Amazon

InMobi Pte Ltd

Targetspot Belgium SPRL

Jetpack Digital LLC

Mediasmart Mobile S.L.

Telaria SAS

Epsilon

Inskin Media LTD

Fifty Technology Limited

LiquidM Technology GmbH

LeadsRx, Inc.

Converge-Digital

diva-e products

ViewPay

Fandom, Inc.

Cuebiq

Adkernel LLC

Impact Tech Inc.

LiveRamp, Inc.

Axonix LTD

Cookie Market LTD

ucfunnel Co., Ltd.

Dataseat Ltd

Audience Solutions S.A.

Telaria, Inc

mediarithmics SAS

AdGear Technologies, Inc.

Commanders Act

ADITION technologies AG

Platform161

SpringServe, LLC

adMarketplace, Inc.

Protected Media LTD

Fyber

Affle International

GDMServices, Inc. d/b/a FiksuDSP

Arkeero

The MediaGrid Inc.

Snapsort Inc., operating as Sortable

DAZN Media Services Limited

Arrivalist Co

NEURAL.ONE

Smartme Analytics

Crimtan Holdings Limited

GfK SE

ScaleMonk Inc.

Celtra, Inc.

Kubient Inc.

Jadu
da GmbH

B2B Media Group EMEA

Azerion Holding B.V.

Pure Local Media GmbH

GlobalWebIndex

AdMaxim Inc.

Cydersoft

Triton Digital Canada Inc.

Exponential Interactive, Inc d/b/a VDX.tv

Appier PTE Ltd

AuDigent

Jivox Corporation

EDGE NPD Sp. z o.o.

SINGLESPOT SAS

SoundCast

AdDefend GmbH

Improve Digital BV

Lucid Holdings, LLC

Taboola Europe Limited

MindTake Research GmbH

NOW GmbH

Timehop, Inc.

Justtag Sp. z o.o.

The ADEX GmbH

MediaMath, Inc.

Adevinta Spain S.L.U.

OnAudience Ltd

ADARA MEDIA UNLIMITED

Global Media & Entertainment Limited

1020, Inc. dba Placecast and Ericsson Emodo

Ermes

YouGov

Rezonence Limited

Pixalate, Inc.

The Ozone Project Limited

Brand Advance Limited

Instinctive, Inc.

Quantcast International Limited

Cxense ASA

The Kantar Group Limited

Skaze

Czech Publisher Exchange z.s.p.o.

Roku Advertising Services

AerServ LLC

Pubfinity LLC

Sovrn Holdings Inc

Gemius SA

Acxiom

A.Mob

Spolecznosci Sp. z o.o. Sp. k.

Digital East GmbH

AdColony, Inc.

YOC AG

Triapodi Ltd.

The Trade Desk

THE NEWCO S.R.L.

Knorex

TAPTAP Digital SL

Nubo LTD

Artefact Deutschland GmbH

EASY Marketing GmbH

ad6media

Norstat AS

Bit Q Holdings Limited

Flexoffers.com, LLC

Online Solution

Kairion GmbH

adsquare GmbH

Verizon Media EMEA Limited

NEORY GmbH

Connatix Native Exchange Inc.

Outbrain UK Ltd

SheMedia, LLC

Eyeota Pte Ltd

On Device Research Limited

TrueData Solutions, Inc.

Sportradar AG

AAX LLC

Accorp Sp. z o.o.

Adacado Technologies Inc. (DBA Adacado)

INVIBES GROUP

Optomaton UG

SMARTSTREAM.TV GmbH

Audiens S.r.l.

Sirdata

AddApptr GmbH

Cloud Technologies S.A.

Smartclip Hispania SL

White Ops, Inc.

ID5 Technology SAS

ConnectAd Realtime GmbH

Delidatax SL

Eulerian Technologies

Converto AG

MGID Inc.

HEIMSPIEL Medien GmbH & Co KG

ADRENALEAD

DIGITEKA Technologies

Neodata Group srl

Nielsen LLC

numberly

Experian Limited

OpenWeb LTD

SITU8ED SA

BeOp

Mintegral international limited

ADYOULIKE SA

Adtarget Medya A.S.

Haensel AMS GmbH

MARKETPERF CORP

DynAdmic

Predicio

Reveal Mobile Inc

Amobee Inc.

Ve Global UK Limited

twiago GmbH

AdSpirit GmbH

MOVIads Sp. z o.o. Sp. k.

Dynamic 1001 GmbH

Bannernow, Inc.

lead alliance GmbH

Nielsen Marketing Cloud

Programatica de publicidad S.L.

The Reach Group GmbH

Noster Finance S.L.

MiQ

PIXIMEDIA SAS

PaperG, Inc. dba Thunder Industries

Online Advertising Network Sp. z o.o.

IPSOS MORI UK LTD

SunMedia

Hybrid Adtech GmbH

Cazamba Serviços de Internet Ltda

360e-com Sp. z o.o.

Seznam.cz, a.s.

ORTEC B.V.

Mobile Professionals BV

Mediakeys Platform

Tapjoy, Inc.

Next Media SRL

TIMEONE PERFORMANCE

Natív Hirdetés Korlátolt Felelősségű Társaság

TreSensa Technologies, Inc.

Dentsu Aegis Network Italia SpA

42 Ads GmbH

VECTAURY

TX Group AG

SOMQUERY SOMTAG - (SevenOne Media)

Avocet Systems Limited

Adverty AB (publ)

Triple13 Ltd

Active Agent (ADITION technologies AG)

OneTag Limited

ShareThis, Inc

NetSuccess, s.r.o.

Instreamatic inc.

Samba TV UK Limited

Adform

RhythmOne DBA Unruly Group Ltd

Vibrant Media Limited

Neustar on behalf of The Procter & Gamble Company

Smadex SL

Kwanko

Adtelligent Inc.

Bigabid Media ltd

Maiden Marketing Pte Ltd

Listonic Sp. z o.o.

video intelligence AG

Smart Traffik

Carbon (AI) Limited

Rakuten Marketing LLC

ADman Interactive SLU

Factor Eleven GmbH

Snapupp Technologies SL

EMX Digital LLC

FeedAd GmbH

Ingenious Technologies AG

PubMatic, Inc.

Roq.ad Inc.

Adnuntius AS

district m inc.

Flashtalking, Inc.

Lotame Solutions, inc

Clinch Labs LTD

Radio Net Media Limited

Disqus

Smaato, Inc.

Teads

Kochava Inc.

6Sense Insights, Inc.

AdQuiver Media SL

Bidtellect, Inc

Criteo SA

Media.net Advertising FZ-LLC

GADSME

LifeStreet Corporation

adbility media GmbH

NC Audience Exchange, LLC (NewsIQ)

Contact Impact GmbH

AdsWizz Inc.

PubNative GmbH

Mediavine, Inc.

SelectMedia International LTD

Liftoff Mobile, Inc.

zeotap GmbH

Adjust GmbH

Ezoic Inc.


Special Features
Special Features are processing purposes that require your explicit consent

Use precise geoloca
tion data
Vendors can:

•
Collect and process precise geolocation data in support of one or more purposes.

N.B. Precise geolocation means that there are no restrictions on the precision of a user’s location; this can be accurate to within several meters.

PROXISTORE

Permodo GmbH

Adxperience SAS

BeeswaxIO Corporation

NumberEight Technologies Ltd

Blue

Bring! Labs AG

GP One GmbH

Zeta Global

EASYmedia GmbH

IPONWEB GmbH

Next Media

Blis Media Limited

Arcspire Limited

xAd, Inc. dba GroundTruth

Unruly Group Ltd

BIDSWITCH GmbH

Ad Alliance GmbH

Inspired Mobile Limited

Near Pte Ltd

INFINIA MOBILE S.L.

AdTheorent, Inc

Fido S.r.l

XChange by SFBX:registered:

Location Sciences AI Ltd.

Index Exchange, Inc.

Smart Adserver

Bucksense Inc

StackAdapt

Vidazoo Ltd

Quantyoo GmbH & Co. KG

Solocal

: Tappx

MyTraffic

Dugout Limited

Sift Media, Inc

UAB Aktyvus sektorius - Eskimi

TabMo SAS

Yieldlab AG

Beachfront Media LLC

BidMachine Inc.

adhood.com

InMobi Pte Ltd

Targetspot Belgium SPRL

TripleLift, Inc.

Discover-Tech ltd

Mediasmart Mobile S.L.

travel audience GmbH

Telaria SAS

LiquidM Technology GmbH

LeadsRx, Inc.

Fandom, Inc.

Cuebiq

Kairos Fire

Adkernel LLC

Impact Tech Inc.

VRTCAL Markets Inc

Go.pl sp. z o.o.

Axonix LTD

Hivestack Inc.

Cookie Market LTD

ucfunnel Co., Ltd.

Audience Solutions S.A.

Telaria, Inc

Rich Audience Technologies SL

N Technologies Inc.

ADITION technologies AG

Platform161

Fyber

Affle International

M,P,NEWMEDIA, GmbH

GDMServices, Inc. d/b/a FiksuDSP

Arkeero

DAZN Media Services Limited

Arrivalist Co

Crimtan Holdings Limited

Reppublika- The Research Toolbox GmbH

ADUX

Celtra, Inc.

Kubient Inc.

Jaduda GmbH

LEESTEN INC

Azerion Holding B.V.

AdMaxim Inc.

adrule mobile GmbH

Cydersoft

Triton Digital Canada Inc.

Appier PTE Ltd

Jivox Corporation

LoopMe Limited

SINGLESPOT SAS

SoundCast

Improve Digital BV

NOW GmbH

Delta Projects AB

Justtag Sp. z o.o.

BusinessClick

MediaMath, Inc.

Proxi.cloud sp. z.o.o

Adevinta Spain S.L.U.

OnAudience Ltd

Global Media & Entertainment Limited

1020, Inc. dba Placecast and Ericsson Emodo

Teemo SA

Weborama

Pixalate, Inc.

The Ozone Project Limited

Brand Advance Limited

Instinctive, Inc.

Cxense ASA

The Kantar Group Limited

Skaze

Roku Advertising Services

BEINTOO SPA

AerServ LLC

Acxiom

A.Mob

AUDIOMOB LTD

Digital East GmbH

YOC AG

The Trade Desk

Goldbach Group AG

Shopalyst Inc

Mobsuccess

THE NEWCO S.R.L.

Knorex

TAPTAP Digital SL

ad6media

Bounce Exchange, Inc

Bit Q Holdings Limited

Blingby LLC

Online Solution

Kairion GmbH

Gamned

adsquare GmbH

Seeding Alliance GmbH

Verizon Media EMEA Limited

MADVERTISE MEDIA

Mobfox US LLC

UberMedia, Inc.

Admixer EU GmbH

GeoProve

On Device Research Limited

TrueData Solutions, Inc.

Audienzz AG

Sportradar AG

Adacado Technologies Inc. (DBA Adacado)

Audiens S.r.l.

AddApptr GmbH

Cloud Technologies S.A.

Smartclip Hispania SL

ConnectAd Realtime GmbH

Delidatax SL

ADRENALEAD

DIGITEKA Technologies

Neodata Group srl

numberly

Telefonica Investigación y Desarrollo S.A.U

OpenWeb LTD

SITU8ED SA

Prebid.org

Adtarget Medya A.S.

Clipcentric, Inc.

Predicio

Reveal Mobile Inc

IP Deutschland GmbH

A Million Ads Ltd

MOVIads Sp. z o.o. Sp. k.

Maximus Live LLC

Nielsen Marketing Cloud

Noster Finance S.L.

MiQ

mobalo GmbH

PIXIMEDIA SAS

PaperG, Inc. dba Thunder Industries

Online Advertising Network Sp. z o.o.

Hybrid Adtech GmbH

360e-com Sp. z o.o.

Seznam.cz, a.s.

ORTEC B.V.

Mobile Professionals BV

Mediakeys Platform

Next Media SRL

Simplifi Holdings Inc

BLIINK SAS

Dentsu Aegis Network Italia SpA

Onfocus (Adagio)

VECTAURY

Goodway Group, Inc.

TX Group AG

Avocet Systems Limited

Active Agent (ADITION technologies AG)

OneTag Limited

RhythmOne DBA Unruly Group Ltd

Vibrant Media Limited

Jellyfish France

Smadex SL

Collective Europe Ltd.

Bigabid Media ltd

Maiden Marketing Pte Ltd

Listonic Sp. z o.o.

Smart Traffik

EMX Digital LLC

FeedAd GmbH

RMSi Radio Marketing Service interactive GmbH

PubMatic, Inc.

Roq.ad Inc.

district m inc.

Flashtal
king, Inc.

Ströer SSP GmbH (DSP)

Clinch Labs LTD

Adhese

Radio Net Media Limited

Smaato, Inc.

Anzu Virtual Reality LTD

Kochava Inc.

AdQuiver Media SL

InsurAds Technologies SA.

Adludio Ltd.

GADSME

WhatRocks Inc.

LifeStreet Corporation

adbility media GmbH

netzeffekt GmbH

audio content & control GmbH

Fusio by S4M

AdsWizz Inc.

PubNative GmbH

The Rubicon Project, Inc.

Xandr, Inc.

Liftoff Mobile, Inc.

Ezoic Inc.


Actively scan device characteristics for identification
EOD;


$stringD = <<<EOD
Review and object to processing of personal data without your consent on the basis of a legitimate interest for each purpose and by each partner below. Expand each purpose or partner list item for more information to help make your choice. To object to the special purposes of ensuring security, preventing fraud, and debugging, and technically delivering ads or content click on a partner's privacy policy link.

LEGITIMATE INTEREST PURPOSE(S)


Select basic ads


Create a personalised ads profile

A profile can be built about you and your interests to show you personalised ads that are relevant to you.

Legal Description
Show Partners
OBJECT

Select personalised ads

Personalised ads can be shown to you based on a profile about you.

Legal Description
Show Partners
OBJECT

Create a personalised content profile

A profile can be built about you and your interests to show you personalised content that is relevant to you.

Legal Description
Show Partners
OBJECT

Select personalised content

Personalised content can be shown to you based on a profile about you.

Legal Description
Show Partners
OBJECT

Measure ad performance

The performance and effectiveness of ads that you see or interact with can be measured.

Legal Description
Show Partners
OBJECT

Measure content performance

The performance and effectiveness of content that you see or interact with can be measured.

Legal Description
Show Partners
OBJECT

Apply market research to generate audience insights

Market research can be used to learn more about the audiences who visit sites/apps and view ads.

Legal Description
Show Partners
OBJECT

Develop and improve products

Your data can be used to improve existing systems and software, and to develop new products

Legal Description
Show Partners
OBJECT
LEGITIMATE INTEREST VENDORS


1plusX AG

Privacy Policy: https://www.1plusx.com/privacy-policy/
Cookie max age: 365 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Create a personalised ads profile

- Select personalised ads

- Create a personalised content profile

- Select personalised content

- Measure ad performance

- Measure content performance

- Apply market research to generate audience insights

- Develop and improve products

Features
- Match and combine offline data sources

- Link different devices

OBJECT

2KDirect, Inc. (dba iPromote)

Privacy Policy: https://www.ipromote.com/privacy-policy/
Cookie max age: 730 Days
Storage disclosure
Legitimate Interest Purpose(s)
- Select basic ads

- Create a personalised ads profile

- Select personalised ads

- Measure ad performance

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

OBJECT

3Q nexx GmbH

Privacy Policy: https://3q.video/de/datenschutz_und_richtlinien
Cookie max age: 30 Days
Legitimate Interest Purpose(s)
- Measure ad performance

- Measure content performance

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

OBJECT

6Sense Insights, Inc.

Privacy Policy: https://6sense.com/privacy-policy/
Cookie max age: 730 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Create a personalised ads profile

- Select personalised ads

- Create a personalised content profile

- Measure ad performance

- Measure content performance

- Develop and improve products

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

OBJECT

7Hops.com Inc. (ZergNet)

Privacy Policy: https://zergnet.com/privacy
Cookie max age: 30 Days
Legitimate Interest Purpose(s)
- Create a personalised content profile

- Select personalised content

- Measure content performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

OBJECT

Aarki, Inc.

Privacy Policy: https://corp.aarki.com/privacy
Cookie max age: null Seconds
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Receive and use automatically-sent device characteristics for identification

OBJECT

AAX LLC

Privacy Policy: https://aax.media/privacy/
Cookie max age: 2191 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Receive and use automatically-sent device characteristics for identification

OBJECT

Accorp Sp. z o.o.

Privacy Policy: https://www.instytut-pollster.pl/privacy-policy/
Cookie max age: 365 Days
Legitimate Interest Purpose(s)
- Measure ad performance

- Measure content performance

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

OBJECT

AcuityAds Inc.

Privacy Policy: https://privacy.acuityads.com/corporate-privacy-policy.html
Cookie max age: 365 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Measure content performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Link different devices

OBJECT

Acxiom

Privacy Policy: https://www.acxiom.com/about-us/privacy/
Cookie max age: null Seconds
Legitimate Interest Purpose(s)
- Select basic ads

- Create a personalised ads profile

- Select personalised ads

- Create a personalised content profile

- Select personalised content

- Measure ad performance

- Measure content performance

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

OBJECT

ad6media

Privacy Policy: https://www.ad6media.fr/privacy
Cookie max age: 365 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Create a personalised ads profile

- Select personalised ads

- Create a personalised content profile

- Select personalised content

- Measure ad performance

- Measure content performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Link different devices

- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

- Actively scan device characteristics for identification

OBJECT

ADARA MEDIA UNLIMITED

Privacy Policy: https://adara.com/privacy-promise/
Cookie max age: 730 Days
Legitimate Interest Purpose(s)
- Measure ad performance

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

OBJECT

adbility media GmbH

Privacy Policy: https://www.adbility-media.com/datenschutzerklaerung/
Cookie max age: 0 Seconds
Legitimate Interest Purpose(s)
- Measure ad performance

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

- Actively scan device characteristics for identification

OBJECT

AddApptr GmbH

Privacy Policy: https://www.addapptr.com/data-privacy
Cookie max age: null Seconds
Legitimate Interest Purpose(s)
- Measure ad performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

- Actively scan device characteristics for identification

OBJECT

AdDefend GmbH

Privacy Policy: https://www.addefend.com/en/privacy-policy/
Cookie max age: 30 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Create a personalised ads profile

- Select personalised ads

- Measure ad performance

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Receive and use automatically-sent device characteristics for identification

OBJECT

Adevinta Spain S.L.U.

Privacy Policy: https://www.adevinta.com/about/privacy/
Cookie max age: 180 Days
Legitimate Interest Purpose(s)
- Measure ad performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

OBJECT

AdGear Technologies, Inc.

Privacy Policy: https://adgear.com/en/privacy
Cookie max age: 395 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

OBJECT

Adikteev

Privacy Policy: https://www.adikteev.com/privacy
Cookie max age: null Seconds
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Link different devices

OBJECT

Adkernel LLC

Privacy Policy: https://adkernel.com/privacy-policy/
Cookie max age: 30 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Apply market research to generate audience insights

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

OBJECT

Adloox SA

Privacy Policy: https://adloox.com/disclaimer
Cookie max age: null Seconds
Legitimate Interest Purpose(s)
- Measure ad performance

Special Purposes
- Ensure security, prevent fraud, and debug

OBJECT

adMarketplace, Inc.

Privacy Policy: https://www.admarketplace.com/privacy-policy/
Cookie max age: 61 Days
Legitimate Interest Purpose(s)
- Measure ad performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

OBJECT

Admedo Technology Ltd


Admixer EU GmbH


Adnami Aps


Adobe Advertising Cloud


ADRENALEAD


Adserve.zone / Artworx AS


Adssets AB


Adtube AS


advanced store GmbH


Adverticum cPlc.


Adxperience SAS


ADYOULIKE SA


Alphalyr SAS


Amobee Inc.


Apester Ltd


Appier PTE Ltd


appTV Ltd.


AREIA (ADLOOP)


ARKHEUS


ARMIS SAS


Arrivalist Co


Audience Trading Platform Ltd.


AudienceProject Aps


AudienceRun corp


Audienzz AG


audio content & control GmbH


Avid Media Ltd


Avocet Systems Limited


AWIN AG


Axel Springer Teaser Ad GmbH


Axonix LTD


Azerion Holding B.V.


Bannerflow AB


Bannernow, Inc.


Beachfront Media LLC


Beaconspark Ltd


BeOp


Between Exchange


BidMachine Inc.


Bidtellect, Inc


BidTheatre AB


Bigabid Media ltd


Blockthrough, Inc.


Blue


Blue Billywig BV


Bombora Inc.


Bounce Exchange, Inc


Bring! Labs AG


BritePool Inc


CAKE Software, Inc.


Caroda s.r.o.

Privacy Policy: https://www.caroda.io/privacy-statement
Cookie max age: null Seconds
Legitimate Interest Purpose(s)
- Select basic ads

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

OBJECT

Cavai AS & UK

Privacy Policy: https://cav.ai/privacy-policy/
Cookie max age: null Seconds
Legitimate Interest Purpose(s)
- Measure ad performance

- Measure content performance

OBJECT

Cazamba Serviços de Internet Ltda


Celtra, Inc.


CentralNic Poland sp. z o.o.


Clever Advertising, Lda.


Click Tech Limited


Clipcentric, Inc.


Collective Europe Ltd.


communicationAds GmbH &amp; Co. KG


Contact Impact GmbH


Converge-Digital


Crimtan Holdings Limited


Cuebiq


Dailymotion SA


DAZN Media Services Limited


DeepIntent, Inc.


DEFINE MEDIA GMBH


Delta Projects AB

Privacy Policy: https://deltaprojects.com/data-collection-policy
Cookie max age: 365 Days
Legitimate Interest Purpose(s)
- Measure ad performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Special Features
- Use precise geolocation data

OBJECT

Dianomi ltd

Privacy Policy: https://www.dianomi.com/legal/privacy.epl
Cookie max age: 1095 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Receive and use automatically-sent device characteristics for identification

OBJECT

DIGITEKA Technologies

Privacy Policy: https://www.ultimedia.com/POLICY.html
Cookie max age: 397 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Create a personalised ads profile

- Select personalised ads

- Create a personalised content profile

- Select personalised content

- Measure ad performance

- Measure content performance

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

OBJECT

DistroScale, Inc.

Privacy Policy: https://www.distroscale.com/privacy-policy/
Cookie max age: 730 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Select personalised content

- Measure content performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

OBJECT

EDGE NPD Sp. z o.o.

Privacy Policy: https://abtshield.com/privacy-policy/
Cookie max age: 730000 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Create a personalised ads profile

- Select personalised ads

- Create a personalised content profile

- Select personalised content

- Measure ad performance

- Measure content performance

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Link different devices

- Receive and use automatically-sent device characteristics for identification

OBJECT

Emerse Sverige AB

Privacy Policy: https://www.emerse.com/privacy-policy/
Cookie max age: 30 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Measure content performance

- Apply market research to generate audience insights

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

OBJECT

emetriq GmbH

Privacy Policy: https://www.emetriq.com/datenschutz/
Cookie max age: 365 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

OBJECT

EMX Digital LLC

Privacy Policy: https://emxdigital.com/privacy/
Cookie max age: 30 Days
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Apply market research to generate audience insights

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Match and combine offline data sources

- Link different devices

- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

OBJECT

Ensighten

Privacy Policy: https://www.ensighten.com/privacy-policy/
Cookie max age: 1825 Days
Legitimate Interest Purpose(s)
- Measure ad performance

- Measure content performance

Special Purposes
- Ensure security, prevent fraud, and debug

Features
- Match and combine offline data sources

Special Features
- Use precise geolocation data

OBJECT

Ezoic Inc.

Privacy Policy: https://www.ezoic.com/terms/
Cookie max age: 2555 Days
Legitimate Interest Purpose(s)
- Select personalised content

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

OBJECT

FeedAd GmbH

Privacy Policy: https://feedad.com/privacy/
Cookie max age: 43200 Seconds
Legitimate Interest Purpose(s)
- Select basic ads

- Measure ad performance

- Develop and improve products

Special Purposes
- Ensure security, prevent fraud, and debug

- Technically deliver ads or content

Features
- Link different devices

- Receive and use automatically-sent device characteristics for identification

Special Features
- Use precise geolocation data

- Actively scan device characteristics for identification

OBJECT

Fiducia DLT Limited


Fifty Technology Limited


Frameplay Corporation


GDMServices, Inc. d/b/a FiksuDSP


GeoEdge


glomex GmbH


Goldbach Group AG


Good-Loop Ltd


Google Advertising Products


GP One GmbH


GroupM UK Limited


Haensel AMS GmbH


HUAWEI Ads


HyperTV Inc.


Impact Tech Inc.


Impact+


Improve Digital BV


INFOnline GmbH


Innovid Inc.


Inskin Media LTD


Instinctive, Inc.


InsurAds Technologies SA.


Integral Ad Science, Inc.


Internet BillBoard a.s.


INVIBES GROUP


IPSOS MORI UK LTD


IVO Media Ltd


Jaduda GmbH


Jellyfish France


Jetpack Digital LLC


Justpremium BV


Justtag Sp. z o.o.


Kayzen


Kiosked Ltd


lead alliance GmbH


LeadsRx, Inc.


LifeStreet Corporation


Liftoff Mobile, Inc.


LinkedIn Ireland Unlimited Company


Listonic Sp. z o.o.


Livewrapped AB


LoopMe Limited


Lotame Solutions, inc


M,P,NEWMEDIA, GmbH


M32 Connect Inc


MARKETPERF CORP


Maximus Live LLC


Media.net Advertising FZ-LLC


Mediaforce LTD


Mediakeys Platform


MediaMath, Inc.


Meetrics GmbH


Mintegral international limited


Mirando GmbH &amp; Co KG


Mobilewalla, Inc.


Mobkoi Ltd


Moloco, Inc.


N Technologies Inc.


Natív Hirdetés Korlátolt Felelősségű Társaság


Nativo, Inc.


NC Audience Exchange, LLC (NewsIQ)


NEORY GmbH


NetSuccess, s.r.o.


Neustar on behalf of The Procter & Gamble Company


NeuStar, Inc.


NEXD


Nielsen LLC


Nielsen Marketing Cloud


Noster Finance S.L.


NOW GmbH


Nubo LTD


NumberEight Technologies Ltd


Ogury Ltd.


One Planet Only


Onnetwork Sp. z o.o.


OpenWeb LTD


OpenX


Opinary GmbH


Opti Digital SAS


Oracle Data Cloud


Otto (GmbH & Co KG)


PaperG, Inc. dba Thunder Industries


Paypersale.ru


Permutive Limited


Permutive Technologies, Inc.


Pixalate, Inc.


PIXIMEDIA SAS


Playbuzz Ltd (aka EX.CO)


plista GmbH


Polar Mobile Group Inc.


PowerLinks Media Limited


Powerspace


Protected Media LTD


PROXISTORE


Publisher First, Inc.


PubMatic, Inc.


PubWise, LLLP


Quantcast International Limited


Radio Net Media Limited


Rakuten Marketing LLC


Readpeak Oy


Redbranch, Inc dba Fraudlogix


Research and Analysis of Media in Sweden AB


Revcontent, LLC


Rezonence Limited


RMSi Radio Marketing Service interactive GmbH


Scene Stealer Limited


Seeding Alliance GmbH


Seznam.cz, a.s.


ShareThis, Inc


Showheroes SE


Signal Digital Inc.


Silverbullet Data Services Group


Sirdata


Sirdata Cookieless


Sizmek by Amazon


Skimbit Ltd


Smaato, Inc.


Smart Traffik


smartclip Europe GmbH


SmartFrame Technologies


SMARTLINE SYSTEMS


Smartology Limited


SMARTSTREAM.TV GmbH


Snapsort Inc., operating as Sortable


Snapupp Technologies SL


SOMQUERY SOMTAG - (SevenOne Media)


Sonobi, Inc


Sourcepoint Technologies, Inc.


Sparklit Networks Inc


Spoods GmbH


Spotible


SpotX, Inc.


Squared SAS


StackAdapt


Steel House, Inc.


STRIATUM SAS


Ströer SSP GmbH (DSP)


Ströer SSP GmbH (SSP)


Strossle International AB


Survata Inc.


TACTIC™ Real-Time Marketing AS


Tapjoy, Inc.


TAPTAP Digital SL


TargetVideo GmbH


Teads


Telaria SAS


Telaria, Inc


Telecoming S.A.


Terminus Software Inc.


The Reach Group GmbH


The Rubicon Project, Inc.


The Trade Desk


Think Clever Media


Traffective GmbH


TreSensa Technologies, Inc.


Trinity Audio


TripleLift, Inc.


Triton Digital Canada Inc.


Truvid Inc.


TX Group AG


UAB Aktyvus sektorius - Eskimi


Unmatched Solutions Limited


usemax advertisement (Emego GmbH)


Verizon Media EMEA Limited


Vidazoo Ltd


video intelligence AG


VRTCAL Markets Inc


Wagawin GmbH


Weborama


Welect GmbH


White Ops, Inc.


Xandr, Inc.


Yieldlove GmbH


YOC AG


ZBO Media


Zeta Global


Ziff Davis LLC

PARTNERS
LEGITIMATE INTEREST
OBJECT ALL
SAVE & EXIT
EOD;


$links = [
	'<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>',
	'<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>',
	'<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>',
	'<a href="https://policies.google.com/terms?hl=en-US">https://policies.google.com/terms?hl=en-US</a>',
	'<a href="https://www.facebook.com/terms.php">https://www.facebook.com/terms.php</a>',
	'<a href="https://www.facebook.com/terms.php">https://www.facebook.com/terms.php</a>',
	'<a href="https://www.facebook.com/terms.php">https://www.facebook.com/terms.php</a>',
	'<a href="https://www.facebook.com/terms.php">https://www.facebook.com/terms.php</a>',
	'<a href="https://google.com">https://google.com</a>',
	'<a href="https://google.com">https://google.com</a>',
	'<a href="https://google.com">https://google.com</a>',
	'<a href="https://google.com">https://google.com</a>',
	'<a href="https://www.google.com/search?q=deep+dream+cat&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=cat+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM">https://www.google.com/search?q=deep+dream+cat&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=cat+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM</a>',
	'<a href="https://www.google.com/search?q=deep+dream+cat&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=cat+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM">https://www.google.com/search?q=deep+dream+cat&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=cat+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM</a>',
	'<a href="https://www.google.com/search?q=deep+dream+cat&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=cat+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM">https://www.google.com/search?q=deep+dream+cat&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=cat+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM</a>',
	'<a href="https://www.google.com/search?q=deep+dream+cat&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=cat+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM">https://www.google.com/search?q=deep+dream+cat&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=cat+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM</a>',
	'<a href="https://www.google.com/search?q=deep+dream+dog&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=dog+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM">https://www.google.com/search?q=deep+dream+dog&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=dog+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM</a>',
	'<a href="https://www.google.com/search?q=deep+dream+dog&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=dog+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM">https://www.google.com/search?q=deep+dream+dog&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=dog+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM</a>',
	'<a href="https://www.google.com/search?q=deep+dream+dog&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=dog+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM">https://www.google.com/search?q=deep+dream+dog&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=dog+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM</a>',
	'<a href="https://www.google.com/search?q=deep+dream+dog&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=dog+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM">https://www.google.com/search?q=deep+dream+dog&tbm=isch&ved=2ahUKEwjrkYXIxPvvAhXS2KQKHXteCykQ2-cCegQIABAA&oq=dog+deep+dre&gs_lcp=CgNpbWcQARgAMgYIABAIEB46BAgAEEM6AggAOgQIABAYUNsXWKA2YOM_aABwAHgAgAFXiAHJBJIBATmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=qrh1YOuUBdKxkwX7vK3IAg#imgrc=coawcTtxuLpAPM</a>',
	'<a href="https://images.app.goo.gl/kxy5jegQCi43Ha3p7">https://images.app.goo.gl/kxy5jegQCi43Ha3p7</a>',
	'<a href="https://images.app.goo.gl/kxy5jegQCi43Ha3p7">https://images.app.goo.gl/kxy5jegQCi43Ha3p7</a>',
	'<a href="https://images.app.goo.gl/kxy5jegQCi43Ha3p7">https://images.app.goo.gl/kxy5jegQCi43Ha3p7</a>',
	'<a href="https://images.app.goo.gl/kxy5jegQCi43Ha3p7">https://images.app.goo.gl/kxy5jegQCi43Ha3p7</a>',
	'<a href="https://images.app.goo.gl/vfdWuV6p8YSDGVTc7">https://images.app.goo.gl/vfdWuV6p8YSDGVTc7</a>',
	'<a href="https://images.app.goo.gl/vfdWuV6p8YSDGVTc7">https://images.app.goo.gl/vfdWuV6p8YSDGVTc7</a>',
	'<a href="https://images.app.goo.gl/vfdWuV6p8YSDGVTc7">https://images.app.goo.gl/vfdWuV6p8YSDGVTc7</a>',
	'<a href="https://images.app.goo.gl/vfdWuV6p8YSDGVTc7">https://images.app.goo.gl/vfdWuV6p8YSDGVTc7</a>',
	'<a href="https://images.app.goo.gl/Ew4VksN7DdLQbDRC7">https://images.app.goo.gl/Ew4VksN7DdLQbDRC7</a>',
	'<a href="https://images.app.goo.gl/Ew4VksN7DdLQbDRC7">https://images.app.goo.gl/Ew4VksN7DdLQbDRC7</a>',
	'<a href="https://images.app.goo.gl/Ew4VksN7DdLQbDRC7">https://images.app.goo.gl/Ew4VksN7DdLQbDRC7</a>',
	'<a href="https://images.app.goo.gl/Ew4VksN7DdLQbDRC7">https://images.app.goo.gl/Ew4VksN7DdLQbDRC7</a>',
	'<img class="small" src="img/download.jpg" />',
	'<img class="small" src="img/warp.gif" />',
	'<img class="small" src="img/geoffrey.jpg" />',
	'<img class="small" src="img/cloud.jpg" />',
	'<img class="small" src="img/dc.gif" />',
	'<img class="small" src="img/infected.jpg" />',
	'<img class="small" src="http://www.lliisstt.it/3.0/media/pages/items/tight-media/4109106458-1618299197/pasted-img-1065839.jpg" />',
	'<img class="small" src="img/deedrecat.jpg" />',
	'<img class="small" src="http://www.lliisstt.it/3.0/media/pages/items/machine-learning-landscapes/3155032481-1615218643/pasted-img-55528712.jpg" />',
	'<img class="small" src="http://www.lliisstt.it/3.0/media/pages/items/networks-points-etc/3635930643-1573388157/pasted-img-43070474.jpg" />',
	'<iframe width="1379" height="627" src="https://www.youtube.com/embed/WQO-aOdJLiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
];