<x-header>
    <x-partials.nav />

    <div class="content grid-containe">
        <x-header>
            <x-partials.aside />
        </x-header>
        <div class="main card">

        @foreach($faqs as $faq)
        <div>
        <button class="accordion">{{ $faq->faq_question }}</button>
            <div class="panel">
                <p>{{ $faq->faq_answer }}</p>
            </div>
        </div>
         @endforeach   

        </div>
    </div>

    <x-partials.contact />
    </x-main>