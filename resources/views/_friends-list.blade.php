<h3 class="font-bold text-lg mb-4">Friends</h3>
<ul>
    @foreach (range(1, 8) as $index)
        
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <img 
            src="https://i.pravatar.cc/40px"
            alt=""
            class="rounded-full mr-2"
            >
            Bane Radosavljevic
        </div>
    </li>
    @endforeach
</ul>