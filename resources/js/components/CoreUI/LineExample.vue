<script>
import { Line, mixins } from "vue-chartjs";
const { reactiveProp } = mixins;

// import { CustomTooltips } from "@coreui/coreui-plugin-chartjs-custom-tooltips";
// import { hexToRgba } from "@coreui/coreui/dist/js/coreui-utilities";

export default {
  mixins: [reactiveProp],
  props: {
    chartData: { type: Object, default: null },
    options: { type: Object, default: null }
  },
  extends: Line,
  mounted() {
    this.renderChart(this.chartData, this.options);
  }
};
</script>
