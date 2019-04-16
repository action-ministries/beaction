@extends('church.master')
@section('title', 'About Us')
@section('content')
    <!-- Who are we? -->
    <div class="jumbotron about salmonbg text-center">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2>Who Are We?</h2>
                <p>A Family. A Community. A Church.</p>
            </div>
        </div>
    </div>
    <div class="row morepad">
        <div class="col-lg-6">
            <p>ACTION Christian Center was founded in June 2016 by our Senior Pastor, Pastor Ike D. Motley, along with 9 other charter members. The church began from a bible study group that meets at the Crown Royal Motorcycle Club. ACTION’s first service was held on July 3, 2016, at the Best Western Hotel in Kirkwood, MO. After a month of services, Pastor Ike met with another local pastor, the pastor of Greentree Community Church. The pastor then opened the doors to the church building to have services. ACTION has been meeting here ever since.</p>
        </div>
        <div class="col-lg-6">
            <p>Since our inception we have had a heart towards people. Through our parent ministry, A.C.T.I.O.N. Ministries, we have held the Kingdom Woman & Kingdom Man conferences. We have also worked to get the area’s best Christian worshippers, praise teams, poets, and others to have an exciting night of praise & worship at the Kingdom Worship event this April 27 (2019).</p>
        </div>
    </div>
    <!-- Leadership -->
    <div class="jumbotron about yellowbg text-center">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2>Leadership</h2>
                <p>Our staff is a spirited team that direct various ministries of ACC.</p>
            </div>
        </div>
    </div>
    <div class="morepad leadership">
        <div class="row mb50">
            <div class="col-lg-4">
                <div class="media">
                    <img src="{{ asset('church/img/pastorIke.png') }}" alt="" class="mr-3 rounded-circle">
                    <div class="media-body align-self-center">
                        <h3 class="mt-0">
                            Pastor Ike M.
                            <small class="text-muted">Senior Pastor</small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="media">
                    <img src="{{ asset('church/img/minelijah.jpg') }}" alt="" class="mr-3 rounded-circle">
                    <div class="media-body align-self-center">
                        <h3 class="mt-0">
                            Min. Elijah W.
                            <small class="text-muted">Assoc. Pastor/RECLAIM President</small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="media">
                    <img src="{{ asset('church/img/casandra.png') }}" alt="" class="mr-3 rounded-circle">
                    <div class="media-body align-self-center">
                        <h3 class="mt-0">
                            Casandra D.
                            <small class="text-muted">Cheif of Staff/ALIVE President</small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-2">
                <div class="media">
                    <img src="{{ asset('church/img/courtney.jpg') }}" alt="" class="mr-3 rounded-circle">
                    <div class="media-body align-self-center">
                        <h3 class="mt-0">
                            Courtney W.
                            <small class="text-muted">Worship Leader</small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="media">
                    <img src="{{ asset('church/img/felicia.png') }}" alt="" class="mr-3 rounded-circle">
                    <div class="media-body align-self-center">
                        <h3 class="mt-0">
                            Felicia H.
                            <small class="text-muted">Youth Leader</small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Beliefs -->
    <div class="jumbotron about purplebg text-center">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2>Our Beliefs</h2>
                <p>Our beliefs are founded on the firm foundation of the Word of God, and guide us in all that we do.</p>
            </div>
        </div>
    </div>
    <div class="morepad beliefs">
        <div class="row">
            <div class="col-lg-6">
                <ul>
                    <li>We believe the Bible is the inspired and only infallible and authoritative written Word of God.</li>
                    <li>We believe there is one God, eternally existent in three persons: God the Father, God the Son, and God the Holy Spirit.</li>
                    <li>We believe in the deity of our Lord Jesus Christ, in His virgin birth, in His sinless life, in His miracles, in His vicarious and atoning death, in His bodily resurrection, in His ascension to the right hand of the Father, and in His personal future return to this earth in power and glory to rule a thousand years.</li>
                    <li>We believe in the blessed hope – the rapture of the Church at Christ’s coming.</li>
                    <li>We believe the only means of being cleansed from sin is through repentance and faith in the precious blood of Christ.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li>We believe regeneration by the Holy Spirit is absolutely essential for personal salvation.</li>
                    <li>We believe in water baptism by immersion.</li>
                    <li>We believe the redemptive work of Christ on the cross provides healing of the human body in answer to believing prayer.</li>
                    <li>We believe the baptism in the Holy Spirit, according to Acts 2:4, is given to believers who ask for it.</li>
                    <li>We believe in the sanctifying power of the Holy Spirit by whose indwelling the Christian is enabled to live a holy life.</li>
                    <li>We believe in the resurrection of both the saved and the lost, the one to everlasting life and the other to everlasting damnation.</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- What to Expect -->
    <div class="jumbotron about bluebg text-center">
        <h2>What to Expect</h2>
        <p>At ACC, you'll be greeted by people who are excited to meet you.<br />We welcome all, love all, and accept all. Come as you are and find out more for yourself.</p>
    </div>
    <div class="morepad">
        <div class="row">
            <div class="col-lg-6">
                <p>When visiting ACTION Christian Center, you can expect to be greeted by friendly faces. We start services promptly at 2pm with our opening scripture found at Revelation 19:10.</p>
                <blockquote cite="https://www.bible.com/bible/114/REV.19.NKJV">And I fell at his feet to worship him. But he said to me, “See that you do not do that!I am your fellow servant, and of your brethren who have the testimony of Jesus. Worship God! For the testimony of Jesus is the spirit of prophecy.</blockquote>
            </div>
            <div class="col-lg-6">
                <p>After our opening, we will have a reading of scripture from the Old & New Testament, then followed by praise and worship. Also, the children in the church sing every Sunday, “Jesus Love Me” before they head to a separate classroom, where they taught by our children’s instructor, Mother Helen Shed. After their lesson, they’re time is filled with playing at the church playground, if the weather permits.</p>
                <p>Following the children is prayer and a dynamic message from our Senior Pastor, Pastor Ike D. Motley. We would love for you to join us this Sunday. Send us a message on Facebook and we’ll make sure to prepare for your arrival.</p>
            </div>
        </div>
    </div>
@endsection