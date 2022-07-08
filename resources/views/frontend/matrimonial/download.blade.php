<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrimonial Detail | Pdf</title>
    {{-- Style --}}
    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
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
              Age: {!! $matrimonial->date_of_birth == ''
    ? $matrimonial->age
    : \Carbon\Carbon::parse($matrimonial->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Y | Height: {{ $matrimonial->height }}
               Date of Birth: {!! $matrimonial->date_of_birth == '' ? '' : \Carbon\Carbon::parse($matrimonial->date_of_birth)->format('d-m-Y') !!}
               Mobile: {{ $matrimonial->phone }}
               Address: {{ $matrimonial->address }}
                </pre>
            </td>
        </tr>
    </table>
    <hr>
    <div class="detailed-profile">
        <h4>Basic Details -</h4>
        <table class="details">
            <td>Age: {!! $matrimonial->date_of_birth == ''
    ? $matrimonial->age
    : \Carbon\Carbon::parse($matrimonial->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Y | Height: {{ $matrimonial->height }}</td>
            <td> Date of Birth: {!! $matrimonial->date_of_birth == '' ? '' : \Carbon\Carbon::parse($matrimonial->date_of_birth)->format('d-m-Y') !!}</td>

            <td>Gender: {{ $matrimonial->gender }}</td>
        </table>
        <table class="details">
            <td>Marital Status: {{ $matrimonial->marital_status }}</td>
            <td>Gotra: {{ $matrimonial->gotra }}
            <td>Address: {{ $matrimonial->address }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>Background and Religious Details -</h4>
        <table class="details">
            <td>Birth Time: {{ date('h:i A', strtotime($matrimonial->birth_time)) }}</td>
            <td>Birth Place: {{ $matrimonial->birth_place }}</td>

            <td>Rashi: {{ $matrimonial->rashi }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>Contact Details -</h4>
        <table class="details">
            <td>Mobile: {{ $matrimonial->phone }}</td>
            <td>Village/Town: {{ $matrimonial->village }}</td>
            <td>Block: {{ $matrimonial->block }}</td>
        </table>
        <table class="details">
            <td>City: {{ $matrimonial->city }}</td>
            <td>District: {{ $matrimonial->district }}</td>
            <td>Current Address: {{ $matrimonial->current_address }}</td>
        </table>
        <table class="details">
            <td>Permanent Address: {{ $matrimonial->permanent_address }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>Education and Profession -</h4>
        <table class="details">
            <td>Education: {{ $matrimonial->education }}</td>
            <td>Work: {{ $matrimonial->work }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>Family Details -</h4>
        <table class="details">
            <td>Fathers Name: {{ $matrimonial->fathers_name }}</td>
            <td>Mothers Name: {{ $matrimonial->mothers_name }}</td>
            <td>Grand Father: {{ $matrimonial->dada_name }}</td>
        </table>
        <table class="details">
            <td>Grand Mother: {{ $matrimonial->dadi_name }}</td>
            <td>Maternal Grand Father: {{ $matrimonial->nana_name }}</td>
            <td>Maternal Grand Mother: {{ $matrimonial->nani_name }}</td>
        </table>
        <table class="details">
            <td>Total Members: {{ $matrimonial->total_members }}</td>
            <td>No. of Brothers: {{ $matrimonial->no_of_brothers }}</td>
            <td>No. of Sisters: {{ $matrimonial->no_of_sisters }}</td>
        </table>
    </div>
    <div class="detailed-profile">
        <h4>Lifestyle, Interests and more -</h4>
        <table class="details">
            <td>Habits: {{ $matrimonial->hobby }}</td>
        </table>
    </div>
</body>

</html>
