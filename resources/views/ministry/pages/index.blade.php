@extends('ministry.master')
@section('title', 'Home')
@section('content')
    <article class="row">
        <section class="about offset-md-1 col-md-10 col-lg-10 col-lg-offset-1 offset-xl-1 col-xl-10" id="about">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">About Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <img src="{{ asset('/images/minelijah1.jpg') }}" class="img-fluid img-thumbnail" />
                </div>
                <div class="col-md-9 col-lg-9 col-xl-9">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci amet asperiores, at aut, corporis deserunt distinctio eligendi et eveniet exercitationem expedita explicabo facere facilis fugit id illum laborum laudantium maxime minima minus molestiae nesciunt nisi non officia pariatur perferendis quaerat quam quibusdam quis quisquam reiciendis repellat repudiandae sed similique veniam vitae. Consequatur expedita hic quas. Cupiditate deserunt, dolorem dolorum ducimus eaque earum facere laboriosam laborum, minus natus necessitatibus nostrum nulla numquam obcaecati quo reprehenderit suscipit tempora totam ullam, ut. Ab consequuntur doloremque ea esse, et impedit magnam nisi perspiciatis recusandae sapiente sint, velit? Aliquid dicta doloremque fugit laborum quidem.</p>
                </div>
            </div>
        </section>
    </article>
    <article class="row">
        <section class="history col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1" id="history">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">History</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid consectetur delectus dolores enim explicabo fugiat fugit ipsam laudantium maiores nam,
                        natus officia perspiciatis saepe sint tempora tempore? A animi commodi, culpa dolores dolorum eius harum itaque molestias necessitatibus quia quod reiciendis
                        totam ullam vitae, voluptates!<br /><br />
                        Aperiam expedita magnam modi nesciunt officia optio, provident reprehenderit sequi? Architecto beatae cupiditate debitis dolor fugiat illum incidunt iure,
                        laboriosam maxime nam nisi placeat qui quia similique veritatis. Accusantium dolore dolorum excepturi, expedita facilis fuga fugit id inventore, magnam mollitia
                        numquam officia, officiis perspiciatis quasi suscipit tempore tenetur ut? Asperiores consectetur deleniti, enim error expedita explicabo facilis fuga incidunt
                        iste itaque iusto maiores minima minus odio quaerat, quas quia quod rem, sed similique sunt unde vero voluptate. Amet animi, at blanditiis cum dicta ea, eveniet<br /><br />
                        Illum iure maiores possimus quae quam quisquam repellat rerum sed sit tempora totam? Accusamus asperiores cupiditate debitis, deserunt, dignissimos dolores dolorum est harum
                        illo impedit ipsum iure minus natus nemo nobis obcaecati quae quam quibusdam quod reiciendis repudiandae sed sit tempora veritatis voluptate! Amet at beatae consequatur
                        consequuntur, debitis distinctio exercitationem fugit harum illo labore maxime natus nisi non nulla praesentium, quasi, sequi suscipit velit voluptas voluptate? Aut autem
                        commodi cum dolor earum eius eligendi hic incidunt, ipsa laboriosam maiores maxime minus molestias nostrum odio omnis praesentium quae quam qui quidem quo recusandae,
                        repudiandae rerum soluta suscipit tempore temporibus ut? At blanditiis eaque error molestiae officiis perspiciatis placeat repellat! Ad alias asperiores consectetur
                        deleniti doloremque, ea, eaque eos excepturi fuga fugiat laboriosam magni nemo nisi nulla numquam odit perferendis quia quod totam ut! Alias animi blanditiis deserunt<br /><br />
                        Maiores, nulla odio perspiciatis quis quo ut! Asperiores deserunt eligendi enim impedit minus molestiae molestias nesciunt, repudiandae. Dolorem itaque maxime numquam omnis vero.
                        Iusto odit possimus quis repudiandae rerum sunt ullam vel?
                    </p>
                </div>
            </div>
        </section>
    </article>
    <article class="row">
        <section class="col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3 text-center" id="connect">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Connect With Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <a href="#" class="btn btn-lg">
                        <i class="fab fa-3x fa-facebook"></i>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <a href="#" class="btn btn-lg">
                        <i class="fab fa-3x fa-instagram"></i>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <a href="#" class="btn btn-lg">
                        <i class="far fa-3x fa-envelope-open"></i>
                    </a>
                </div>
            </div>
        </section>
    </article>
@endsection