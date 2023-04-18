<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $matrimonial->name }}</title>
</head>

<body>
    <table width="100%" style="margin-bottom: 2rem;">
        <tr>
            <td style="max-width: 100px; text-align: center;">
                <h2 style="font-size: 2rem; border-bottom: 2px solid black;"><strong> @lang('matrimonial.Resume')</strong></h2>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="max-width: 100px; text-overflow:clip; white-space:normal" valign="top">
                <h2 style="color: #000; font-size: 26px;"><strong>{{ $matrimonial->name }}</strong>
                </h2>
                <p style="font-size:1.1rem;">@lang('matrimonial.age'):{!! $matrimonial->date_of_birth == ''
                    ? $matrimonial->age
                    : \Carbon\Carbon::parse($matrimonial->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!}Y |
                    @lang('matrimonial.Height'):{{ $matrimonial->height }}</p>
                <p style="font-size:1.1rem;">@lang('matrimonial.Date of Birth'):{!! $matrimonial->date_of_birth == '' ? '' : \Carbon\Carbon::parse($matrimonial->date_of_birth)->format('d-m-Y') !!}<br>
                    @lang('matrimonial.Mobile Number'):{{ $matrimonial->phone }}
                </p>
                <p style="font-size:1.1rem;">
                    @lang('matrimonial.Address'):{{ $matrimonial->address }}
                </p>
            </td>
            <td align="right">
                <img src="data:upload/jpg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/upload/matrimonial/' . $matrimonial->image))); ?>" width="120">
            </td>
        </tr>
    </table>
    <hr>
    <div class="detailed-profile">
        <h4 style="font-size:1.5rem;">@lang('matrimonial.Detailed Profile') -</h4>
        <table class="details" style="width:100%;">
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.age'):
                    {!! $matrimonial->date_of_birth == ''
                        ? $matrimonial->age
                        : \Carbon\Carbon::parse($matrimonial->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Y | @lang('matrimonial.Height'): {{ $matrimonial->height }}</td>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Date of Birth'):
                    {!! $matrimonial->date_of_birth == '' ? '' : \Carbon\Carbon::parse($matrimonial->date_of_birth)->format('d-m-Y') !!}</td>
            </tr>
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Gender'):
                    {{ $matrimonial->gender }}</td>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Marital Status'):
                    {{ $matrimonial->marital_status }}</td>
            </tr>
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Gotra'):
                    {{ $matrimonial->gotra }}
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Address'):
                    {{ $matrimonial->address }}</td>
            </tr>
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Rashi'):
                    {{ $matrimonial->rashi }}</td>
            </tr>
        </table>
        <h4 style="font-size:1.5rem;">@lang('matrimonial.Contact Details') -</h4>
        <table class="details" style="width:100%;">
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Mobile Number'):
                    {{ $matrimonial->phone }}</td>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Village/Town'):
                    {{ $matrimonial->village }}</td>
            </tr>
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.District'):
                    {{ $matrimonial->district }}</td>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Address'):
                    {{ $matrimonial->address }}</td>
            </tr>
        </table>
        <h4 style="font-size:1.5rem;">@lang('matrimonial.Education and Profession') -</h4>
        <table class="details" style="width:100%;">
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Education'):
                    {{ $matrimonial->education }}</td>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Job Details'):
                    {{ $matrimonial->work }}</td>
            </tr>
        </table>
        <h4 style="font-size:1.5rem;">@lang('matrimonial.Family Details') -</h4>
        <table class="details" style="width:100%;">
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Fathers Name'):
                    {{ $matrimonial->fathers_name }}</td>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Mothers Name'):
                    {{ $matrimonial->mothers_name }}</td>
            </tr>
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.Total Members'):
                    {{ $matrimonial->total_members }}</td>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.No. of Brothers'):
                    {{ $matrimonial->no_of_brothers }}</td>
            </tr>
            <tr>
                <td style="max-width: 100px; text-overflow:clip; white-space:normal; font-size:1.2rem">
                    @lang('matrimonial.No. of Sisters'):
                    {{ $matrimonial->no_of_sisters }}</td>

            </tr>
        </table>
    </div>
</body>

</html>
