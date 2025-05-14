{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<section class="w-full mt-6">
    <h3 class="text-lg font-semibold text-gray-700 mb-4">Recent Feedbacks</h3>

    @forelse ($feedbacks as $feedback)
    <article class="bg-gray-100 p-4 mb-2 rounded shadow-sm">
        <div class="flex items-center mb-1">
            @for ($i = 1; $i <= 5; $i++) <svg xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 {{ $i <= $feedback->rating ? 'text-yellow-500' : 'text-gray-300' }}" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.96a1 1 0 00.95.69h4.174c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.961c.3.921-.755 1.688-1.538 1.118l-3.381-2.455a1 1 0 00-1.175 0l-3.38 2.455c-.783.57-1.838-.197-1.539-1.118l1.287-3.961a1 1 0 00-.364-1.118L2.05 9.387c-.783-.57-.38-1.81.588-1.81h4.174a1 1 0 00.95-.69l1.286-3.96z" />
                </svg>
                @endfor
        </div>
        @if ($feedback->comment)
        <p class="text-gray-700">{{ $feedback->comment }}</p>
        @else
        <p class="text-gray-400 italic">No comment provided.</p>
        @endif
        <p class="text-sm text-gray-500 mt-1">{{ $feedback->created_at->diffForHumans() }}</p>
    </article>
    @empty
    <p class="text-gray-500 italic">No feedbacks yet.</p>
    @endforelse
</section>