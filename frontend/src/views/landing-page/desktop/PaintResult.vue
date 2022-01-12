<template>
    <div class="group-42">
        <div class="paint-result">
            <svg width="200" height="300" viewBox="0 0 200 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="199" height="299" rx="4.5" fill="white" stroke="black"/>
                <path
                    d="M10 42H190V261.098C190 261.098 188.65 311.889 126.55 255.122C107.911 233.687 100.147 263.591 95.3708 266.726C84.9208 273.586 70.2908 261.867 65.8 269.065C40.6 305.913 10 248.151 10 248.151V42Z"
                    fill="#CF5555"
                />
                <line x1="10" y1="32.5" x2="190" y2="32.5" stroke="black"/>
            </svg>
        </div>
    </div>
</template>

<script>
export default {
    name: "PaintResult",
};
</script>

<style scoped>
.group-42 {
    display: flex;
    height: 360px;
    position: relative;
    width: 480px;
}

.paint-result {
    display: flex;
    align-items: center;
    width: 100%;
}

.paint-result svg {
    margin: 0 auto;
}
</style>
