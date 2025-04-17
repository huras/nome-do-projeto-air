{{-- filepath: /home/huras/coding/air-laravel/resources/views/components/floating-chat-window.blade.php --}}
<div class="floating-chat-window position-fixed bottom-0 end-0 m-3" style="bottom: 64px !important; z-index: 1;">
    <!-- Chat Button -->
    <div class="d-flex flex-column align-items-end justify-content-center">
        <img src="{{ asset('images/floating-chat-window/person.png') }}" alt="Chat Icon" class="rounded-circle me-2" style="width: 63px; height: 70px;">
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#contactModal">
            Vamos juntos?
        </button>
    </div>
</div>
