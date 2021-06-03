$(document).ready(function () {
    var CSRF_TOKEN = "{{ csrf_token() }}";
    var URL = "{{ url('/') }}";
    $('#eventCalendar').fullCalendar({});
});