@extends('layouts.master')
@section('title', 'F-KYC | Login')
@section('content')

    <div class="container">
        <div class="row">
            <table class="table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>POI</th>
                    <th>POA</th>
                    <th>Video verify</th>
                </tr>
                </thead>
                <tbody id="up">
                </tbody>
            </table>
        </div>
    </div>

    <div id="inviteModal" class="modal">
        <div class="modal-content">
            <h4 class="center">Enter the hangout link</h4>
            <form>
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <input id="inviteLink" name="inviteLink" type="text" class="validate">
                        <label for="inviteLink">invite Link</label>
                    </div>
                </div>
                <button id="inviteSubmit" type="submit" class=" waves-effect waves-light btn red white-text chip">Submit</button>
            </form>
        </div>
    </div>
    <div id="imgModal" class="modal" style="width: 100%">
        <div class="modal-content">
            <h4 class="center">Images</h4>
            <div id="detail"></div>
        </div>
    </div>


@stop
