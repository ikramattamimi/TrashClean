{{-- @extends('layouts.main')

@section('main-content')
<div class="notifikasi notification-container">
        <h2 class="text-center">My Notifications</h2>
        <div class="card notification-card notification-invitation" style="height: 500px">
            <div class="card-body">
                <table>
                    <tr>
                        <td style="width:50%">
                            <div class="card-title">Jane mengirim permintaan sampah '<b></b>' sebanyak  keranjang</div>
                        </td>
                        <td style="width:50%">
                            <a href="#" class="btn btn-primary">View</a>
                            <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.main')

@section('main-content')
    <section class="" style="background-color: #eee;">
        <div class="container ">
            <h4 class="text-center">Notifikasi</h4>

            @foreach ($notification as $key => $item)
                @if (count($item) != 0)
                    @include('notifikasi.list')
                @endif
            @endforeach
        </div>
    </section>
@endsection
