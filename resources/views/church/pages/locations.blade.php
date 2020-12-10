@extends('church.master')
@section('title', 'Locations')
@section('content')
    <!-- Events -->
    <div class="jumbotron locations bluebg text-center">
        <h1>Locations</h1>
    </div>
    <!-- Revival -->
    <div class="row text-center locations pv60">
        <div class="col-lg-4 offset-md-2">
            <div class="card">
                <img src="{{ asset('church/img/Greentree_plain.png') }}" class="card-img-top" />
                <div class="card-body">
                    <div class="card-title"><h2>ACTION Christian Center - South</h2></div>
                    <div class="card-text">
                        <address>
                            Greentree Community Church<br>
                            100 Kirkwood Place<br>
                            Kirkwood, MO 63122
                        </address>
                    </div>
                    <button class="btn btn-outline-salmon" data-toggle="modal" data-target="#south-modal">Service Times</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img src="{{ asset('church/img/2138.png') }}" class="card-img-top" />
                <div class="card-body">
                <div class="card-title"><h2>ACTION Christian Center - North</h2></div>
                    <div class="card-text">
                        <address>
                        <br>2138 Morning Mist Ct.<br>
                            Florissant, MO 63033
                        </address>
                    </div>
                    <button class="btn btn-outline-salmon" data-toggle="modal" data-target="#north-modal">Service Times</button>
                </div>
            </div>
        </div>
    </div>

    <!-- NORTH MODAL -->
    <div class="modal location-modal fade" id="north-modal" tabindex="-1" aria-labelledby="north-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="north-modal-label">ACTION Christian Center - North</h3>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('church/img/2138.png') }}" class="card-img-top" />
                            </div>
                            <div class="col-lg-6">
                                <h4>Service Times</h4>
                                <table class="mb15">
                                    <tr>
                                        <th>Wednesday</th>
                                        <td>6pm - 7:30pm</td>
                                    </tr>
                                    <tr>
                                        <th>Friday Night Out with Jesus</th>
                                        <td>7pm - 9pm</td>
                                    </tr>
                                </table>
                                <h4>Notes</h4>
                                <p>The driveway to the house is next to the white mailbox. Parking is in the rear of the house.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form class="form-inline" action="http://maps.google.com/maps" method="get" target="_blank">
                        <label class="mr-2" for="saddr">Enter your location</label>
                        <input class="form-control mr-2" type="text" name="saddr" />
                        <input type="hidden" name="daddr" value="2138 Morning Mist Ct. Florissant, MO 63033" />
                        <input class="btn btn-outline-success" type="submit" value="Get Directions" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- NORTH MODAL -->

    <!-- SOUTH MODAL -->
    <div class="modal location-modal fade" id="south-modal" tabindex="-1" aria-labelledby="south-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="south-modal-label">ACTION Christian Center - South</h3>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('church/img/Greentree_plain.png') }}" class="card-img-top" />
                            </div>
                            <div class="col-lg-6">
                                <h4>Service Times</h4>
                                <table class="mb15">
                                    <tr>
                                        <th>Wednesday</th>
                                        <td>6pm - 7:30pm</td>
                                    </tr>
                                    <tr>
                                        <th>Friday Night Out with Jesus</th>
                                        <td>7pm - 9pm</td>
                                    </tr>
                                </table>

                                <h4>Temporary Location</h4>
                                <address>
                                    Jeannine's Beautique<br>
                                    131 W. Monroe Avenue<br>
                                    Kirkwood, MO 63122
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form class="form-inline" action="http://maps.google.com/maps" method="get" target="_blank">
                        <label class="mr-2" for="saddr">Enter your location</label>
                        <input class="form-control mr-2" type="text" name="saddr" />
                        <input type="hidden" name="daddr" value="Jeannine's Beautique 131 W. Monroe Avenue Kirkwood, MO 63122" />
                        <!-- <input type="hidden" name="daddr" value="Greentree Community Church 100 Kirkwood Pl. Kirkwood MO 63122" /> -->
                        <input class="btn btn-outline-success" type="submit" value="Get Directions" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- SOUTH MODAL -->
@endsection