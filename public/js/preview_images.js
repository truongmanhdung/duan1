changeAVT.onchange = evt => {
    const [file] = changeAVT.files
    if (file) {
        viewImage.src = URL.createObjectURL(file)
    }
}