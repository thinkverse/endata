<div>
    <div class="flex-1">
        <h2 class="text-base font-semibold text-gray-900">
            Select an account
        </h2>
        <p class="mt-1 text-sm text-gray-900">
            Select which account you prefer to use for this transaction.
        </p>
    </div>
    <form class="mt-6" wire:submit.prevent="storeAccount">
        <fieldset>
            <legend class="sr-only">
                Bank Account
            </legend>
            <div class="divide-y divide-gray-200">
                @foreach ($accounts as $account)
                    <div class="relative flex items-start pb-4 pt-3 5">
                        <div class="min-w-0 flex-1 text sm leading-6">
                            <label for="{{ $account->account_id }}" class="font-medium text-gray-900">
                                {{ str($account->subtype)->ucfirst() }}
                            </label>
                            <p id="p{{ $account->account_id }}" class="text-gray-500">
                                {{ $account->name }} ****{{ $account->mask }}
                            </p>
                        </div>
                        <div class="ml-3 flex h-6 items-center">
                            <input id="{{ $account->account_id }}" type="radio"
                                aria-describedby="p{{ $account->account_id }}"
                                wire:model.defer="selected.{{ $account->account_id }}"
                                class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-600">
                        </div>
                    </div>
                @endforeach
            </div>
        </fieldset>

        <div class="flex flex-row-reverse">
            <x-primary-button>
                Submit
            </x-primary-button>
        </div>
    </form>
</div>
