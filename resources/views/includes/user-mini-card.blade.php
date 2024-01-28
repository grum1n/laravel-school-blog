<a href="{{ route('users.show', $last_users->id) }}" class="w-full p-4 flex flex-col items-center rounded-lg bg-gradient-to-b from-[#6c73ff8f] to-[#10122b] border border-gray-600 "
    >
    <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover" >
        <img 
            src='https://raw.githubusercontent.com/horizon-ui/horizon-tailwind-react-ts-corporate/main/src/assets/img/nfts/NftBanner1.png' 
            class="absolute flex h-16 w-full justify-center rounded-xl object-cover bg-gray-600 opacity-40"> 
        <x-circle-image-box :path="$last_users->getImageURL()" :altName="$last_users->name" class="absolute -bottom-7 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700" />
    </div> 
    <div class="w-full mt-0 flex justify-between items-center">
        <x-user-name :userName="$last_users->name" />
        <span class="text-sm font-normal text-gray-400">{{ $last_users->created_at->diffForHumans() }}</span>
    </div> 
</a>  
