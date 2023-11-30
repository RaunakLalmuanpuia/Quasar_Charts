<template>
    <div>
        <apexchart
            :width="chart.width"
            :height="chart.height"
            :type="chart.type"
            :options="chart.options"
            :series="chart.series"
        ></apexchart>
    </div>
    <div>
        <apexchart
            :width="model.width"
            :height="model.height"
            :type="model.type"
            :options="model.options"
            :series="model.series"
        ></apexchart>
    </div>
    <div>
        <apexchart
            :width="report.width"
            :height="report.height"
            :type="report.type"
            :options="report.options"
            :series="report.series"
        ></apexchart>
    </div>
</template>

<script setup>
const props = defineProps({
    chart: Object,
    model: Object,
    report: Object,
});
</script>
