<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $matrimonial->name }}</title>
    {{-- Style --}}
    <style type="text/css">
        @font-face {
            font-family: 'TiroDevanagariHindi-Regular';
            font-style: normal;
            font-weight: normal;
            src: url({{ storage_path('fonts\TiroDevanagariHindi-Regular.ttf') }}) format('truetype');
        }

        * {
            font-family: 'TiroDevanagariHindi-Regular';
        }

        .font {
            font-size: 14px;
        }

        p {
            font-size: 13px;
        }

        .detailed-profile {
            margin-top: 2rem;
        }

        .details {
            width: 100%;
        }

        .details td {
            font-size: 15px;
            max-width: 100px;
            text-overflow: clip;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <table width="100%">
        <tr>
            <td valign="top">
                <h2 style="color: #000; font-size: 26px;"><strong>{{ $matrimonial->name }}</strong></h2>
                <p>{{ $matrimonial->about }}</p>
            </td>
            <td align="right">
                <pre class="font">
                    @lang('matrimonial.age'): {!! $matrimonial->date_of_birth == ''
                        ? $matrimonial->age
                        : \Carbon\Carbon::parse($matrimonial->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Y | @lang('matrimonial.Height'): {{ $matrimonial->height }}
               @lang('matrimonial.Date of Birth'): {!! $matrimonial->date_of_birth == '' ? '' : \Carbon\Carbon::parse($matrimonial->date_of_birth)->format('d-m-Y') !!}
               @lang('matrimonial.Mobile Number'): {{ $matrimonial->phone }}
               @lang('matrimonial.Location'): {{ $matrimonial->address }}
                </pre>
            </td>
        </tr>
    </table>
    <hr>
    <div class="detailed-profile">
        <h4>@lang('matrimonial.Detailed Profile') -</h4>
        <table class="details">
            <td> @lang('matrimonial.age'): {!! $matrimonial->date_of_birth == ''
                ? $matrimonial->age
                : \Carbon\Carbon::parse($matrimonial->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Y | @lang('matrimonial.Height'): {{ $matrimonial->height }}</td>
            <td> @lang('matrimonial.Date of Birth'): {!! $matrimonial->date_of_birth == '' ? '' : \Carbon\Carbon::parse($matrimonial->date_of_birth)->format('d-m-Y') !!}</td>

            <td>@lang('matrimonial.Gender'): {{ $matrimonial->gender }}</td>
        </table>
        <table class="details">
            <td>@lang('matrimonial.Marital Status'): {{ $matrimonial->marital_status }}</td>
            <td>@lang('matrimonial.Gotra'): {{ $matrimonial->gotra }}
            <td>@lang('matrimonial.Location'): {{ $matrimonial->address }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>@lang('matrimonial.Background and Religious Details') -</h4>
        <table class="details">
            <td>@lang('matrimonial.Birth Time'): {{ date('h:i A', strtotime($matrimonial->birth_time)) }}</td>
            <td>@lang('matrimonial.Birth Place'): {{ $matrimonial->birth_place }}</td>

            <td>@lang('matrimonial.Rashi'): {{ $matrimonial->rashi }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>@lang('matrimonial.Contact Details') -</h4>
        <table class="details">
            <td>@lang('matrimonial.Mobile Number'): {{ $matrimonial->phone }}</td>
            <td>@lang('matrimonial.Village/Town'): {{ $matrimonial->village }}</td>
            <td>@lang('matrimonial.Block'): {{ $matrimonial->block }}</td>
        </table>
        <table class="details">
            <td>@lang('matrimonial.City'): {{ $matrimonial->city }}</td>
            <td>@lang('matrimonial.District'): {{ $matrimonial->district }}</td>
            <td>@lang('matrimonial.Current Address'): {{ $matrimonial->current_address }}</td>
        </table>
        <table class="details">
            <td>@lang('matrimonial.Permanent Address'): {{ $matrimonial->permanent_address }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>@lang('matrimonial.Education and Profession') -</h4>
        <table class="details">
            <td>@lang('matrimonial.Education'): {{ $matrimonial->education }}</td>
            <td>@lang('matrimonial.Job Details'): {{ $matrimonial->work }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>@lang('matrimonial.Family Details') -</h4>
        <table class="details">
            <td>@lang('matrimonial.Fathers Name'): {{ $matrimonial->fathers_name }}</td>
            <td>@lang('matrimonial.Mothers Name'): {{ $matrimonial->mothers_name }}</td>
            <td>@lang('matrimonial.Grand Father'): {{ $matrimonial->dada_name }}</td>
        </table>
        <table class="details">
            <td>@lang('matrimonial.Grand Mother'): {{ $matrimonial->dadi_name }}</td>
            <td>@lang('matrimonial.Maternal Grand Father'): {{ $matrimonial->nana_name }}</td>
            <td>@lang('matrimonial.Maternal Grand Mother'): {{ $matrimonial->nani_name }}</td>
        </table>
        <table class="details">
            <td>@lang('matrimonial.Total Members'): {{ $matrimonial->total_members }}</td>
            <td>@lang('matrimonial.No. of Brothers'): {{ $matrimonial->no_of_brothers }}</td>
            <td>@lang('matrimonial.No. of Sisters'): {{ $matrimonial->no_of_sisters }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>@lang('matrimonial.Lifestyle, Interests and more') -</h4>
        <table class="details">
            <td>@lang('matrimonial.Habits'): {{ $matrimonial->hobby }}</td>
        </table>
    </div>
</body>

</html>
