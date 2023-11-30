<template>
    <div class="tabe-products">
         <table class="table table-hover table-striped">
            <thead>
                <th>ID</th>
                <th>TITLE</th>
                <th>BRAND</th>
                <th>PRODUCER</th>
                <th>TYPE</th>
                <th>DESCRIPTION</th>
                <th>WEIGHT</th>
                <th>AMOUNT</th>
                <th>PRICE</th>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ product.id }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ product.brand }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ product.producer }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ product.type }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ product.description }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ product.weight }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ product.amount }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ product.price }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        products: Object
    },

}
</script>
