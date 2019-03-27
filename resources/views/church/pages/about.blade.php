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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, dignissimos esse facilis harum ipsa ipsam laboriosam laudantium magni minus modi nesciunt nisi non possimus quas qui repudiandae saepe sequi, unde vitae voluptate. Amet commodi dolorem doloribus et numquam odit, qui quo quod reprehenderit, similique suscipit voluptatem? Architecto, autem delectus est exercitationem fugiat incidunt quod reiciendis sed sit ullam! Accusamus deserunt, ex exercitationem ipsam laborum molestias neque nihil rerum similique velit! Ab accusantium animi autem cumque ea, eius enim fugit id ipsum libero magni molestiae molestias mollitia natus nemo nesciunt nostrum optio perspiciatis.<br /><br />Praesentium quas quisquam quod ratione sapiente sunt suscipit tempore ut velit veritatis voluptates voluptatum. Distinctio est impedit itaque non optio. Et explicabo fugit laboriosam, maiores mollitia optio possimus provident voluptatibus. Accusamus aliquam aut consequatur delectus doloremque doloribus earum, enim error esse eum ex harum illo in libero natus nobis odit perspiciatis quia repudiandae sequi, soluta tempore tenetur voluptas!</p>
        </div>
        <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad atque deleniti, explicabo id iure laborum magnam maiores nobis, non omnis provident quia repudiandae sed tempore?<br /><br /> Amet asperiores assumenda dicta enim est, explicabo fuga, libero magnam nihil numquam provident, quidem quisquam voluptas. Accusamus aperiam architecto blanditiis commodi delectus doloribus ducimus expedita id illum impedit ipsum iste laborum maxime minus mollitia non, nulla officia officiis omnis placeat quasi quidem quos recusandae sed temporibus ullam ut veniam! Alias amet asperiores aspernatur cupiditate excepturi, facilis fugit laboriosam maiores odio quae saepe similique soluta voluptas!</p>
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
@endsection