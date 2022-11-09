@extends('layouts.main')

@section('main-content')
<div class="notifikasi notification-container">
        <h2 class="text-center">My Notifications</h2>
        <div class="card notification-card notification-invitation">
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
@endsection