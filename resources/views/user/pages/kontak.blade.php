@extends('user.layouts.main')
@section('title', 'Kontak')
@section('content')
    <div class="w-full max-w-lg mx-auto mt-5 md:max-w-3xl lg:max-w-5xl xl:max-w-7xl md:mt-28 lg:mt-5 xl:mt-5">
        <div
            class="max-w-screen-lg p-5 mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="border-b-4 border-gray-200 dark:border-gray-700">
                <h1 class="pb-2 text-3xl font-semibold dark:text-white">Kontak Kami</h1>
            </div>
            <section class="mt-5">
                <div class="text-gray-900 dark:text-white">Alamat : Jl. Kampus Limau Manis, Padang 25164</div>
                <div class="text-gray-900 dark:text-white">Telp : (+62)-751-72590</div>
                <div class="text-gray-900 dark:text-white">Email :
                    <a class="text-blue-800" href="mailto:elektro@pnp.ac.id">elektro@pnp.ac.id</a> dan
                    <a class="text-blue-800" href="mailto:jtepnp@gmail.com">jtepnp@gmail.com</a>
                </div>
                <div class="text-gray-900 dark:text-white">Saran dan Kritik : <a class="text-blue-800 "
                        href="http://satik.polinpdg.ac.id/web/">
                        http://satik.polinpdg.ac.id/web/</a>
                </div>
                <iframe class="w-full mt-5 rounded-lg h-80 md:h-96"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3100432401025!2d100.46357607477685!3d-0.9145678990765803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7be9e52a171%3A0x609ef1cc57a38e32!2sPoliteknik%20Negeri%20Padang!5e0!3m2!1sen!2sid!4v1729069784140!5m2!1sen!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </div>
    </div>
@endsection
