@extends('layouts.app')

@section('title', 'Pointage')

@section('content')
    <div class="max-w-screen-xl flex mx-auto gap-16 pt-24 min-h-[calc(100vh*1.5)]">
        <div id="example" class="w-full min-h-1/2"></div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const container = document.querySelector('#example');

                if (typeof Handsontable !== 'undefined' && container) {
                    const hot = new Handsontable(container, {
                        data: [
                            ['', 'Tesla', 'Volvo', 'Toyota', 'Ford'],
                            ['2019', 10, 11, 12, 13],
                            ['2020', 20, 11, 14, 13],
                            ['2021', 30, 15, 12, 13]
                        ],
                        rowHeaders: true,
                        colHeaders: true,
                        height: 'auto',
                        autoWrapRow: true,
                        autoWrapCol: true,
                        licenseKey: 'non-commercial-and-evaluation' // for non-commercial use only
                    });
                } else {
                    console.error('Handsontable not loaded or container not found');
                }
            });
        </script>
    @endpush
@endsection
