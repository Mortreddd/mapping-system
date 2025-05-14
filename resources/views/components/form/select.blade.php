<!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->


<select {{ $attributes->merge(['class' => "border border-primary-800 outline-none focus:ring focus:ring-primary-800
    transition-all duraiton-200 ease-in-out rounded px-3 py-1 "
    ])}}
    >
    {{ $slot }}
</select>