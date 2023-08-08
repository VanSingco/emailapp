<div>
    <div>
        @if (session()->has('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-5" role="alert">
                <p class="font-bold">Success</p>
                {{ session('success') }}
              </div>
        @endif
    </div>
    
    <form action="" wire:submit.prevent='sendEmail'>

        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-full">
                <label for="subject" class="block text-sm font-medium leading-6 text-gray-900">Subject</label>
                <div class="mt-2">
                  <input type="text" name="subject" wire:model.debounce.500ms="subject" id="subject" autocomplete="subject" class="block w-full rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('subject') <span class="text-red-400  mt-5">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-full">
                <label for="recipients" class="block text-sm font-medium leading-6 text-gray-900">Recipients</label>
                <div class="mt-2" x-data="{tags: @entangle('recipients'), newTag: '', inputName: 'recipients' }">
                    <template x-for="tag in tags">
                      <input type="hidden" x-bind:name="inputName + '[]'" x-bind:value="tag">
                    </template>
                  
                    <div class="w-full mx-auto">
                      <div class="tags-input block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <template x-for="tag in tags" :key="tag">
                          <span class="tags-input-tag ">
                            <span x-text="tag"></span>
                            <button type="button" class="tags-input-remove" @click="tags = tags.filter(i => i !== tag)">
                              &times;
                            </button>
                          </span>
                        </template>
                  
                        <input class="tags-input-text" placeholder="Add Recipient..." @keydown.enter.prevent="if (newTag.trim() !== '' && !tags.find(t => t == newTag.trim())) tags.push(newTag.trim()); newTag = ''" x-model="newTag">
                      </div>
                    </div>
                </div>
                @error("emails.0") <span class="text-red-400 mt-3">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-full">
                <label for="message" class="block text-sm font-medium leading-6 text-gray-900">Message</label>
                
                <x-quill class="bg-white" wire:model.debounce.1000ms="content" />
                @error('content') <span class="text-red-400 mt-5">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-full mt-6 flex items-center justify-end">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send Message</button>
            </div>
        </div>
    </form>
</div>



