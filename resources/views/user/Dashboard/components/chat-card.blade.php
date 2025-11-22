<div class="dashboard-card p-6 rounded-xl space-y-4 flex flex-col">
    <div class="flex justify-between items-center">
        <h3 class="font-semibold text-lg">Team Chat</h3>
        <button class="text-gray-400 hover:text-accent-purple"><i class="fas fa-ellipsis-v"></i></button>
    </div>
    <p class="text-xs text-gray-400">Stay connected</p>

    <!-- Chat Thread -->
    <div class="flex-1 min-h-[100px] bg-card-dark/50 p-4 rounded-lg space-y-3 overflow-y-auto">
        <div class="flex space-x-3 items-start">
            <div class="w-8 h-8 rounded-full bg-accent-orange/80 flex items-center justify-center text-xs font-bold">C</div>
            <div class="flex-1">
                <p class="text-xs text-gray-300">
                    The latest campaign boosted our sales!
                </p>
                <p class="text-xs font-semibold mt-1 text-accent-purple">
                    Cahaya Deal
                </p>
            </div>
        </div>
    </div>

    <!-- Input Chat -->
    <div class="flex space-x-2 pt-2">
        <input type="text" placeholder="Reply" class="flex-1 bg-card-dark/50 border border-card-dark/50 text-white rounded-lg py-2 px-4 text-sm focus:ring-accent-purple focus:border-accent-purple">
        <button class="bg-accent-purple hover:bg-accent-orange text-white font-bold py-2 px-4 rounded-lg text-sm transition duration-300">
            Kirim
        </button>
    </div>
</div>