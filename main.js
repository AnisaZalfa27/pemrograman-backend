/**
 * Fungsi untuk menampilkan hasil download
 * @param {string} result - Nama file yang didownload
 */
const showDownload = (result) => {
    console.log("Download selesai");
    console.log(`Hasil Download: ${result}`);
  };
  
  /**
   * Fungsi untuk download file dengan Promise
   * @returns {Promise<string>} - Promise yang akan resolve dengan nama file
   */
  const download = () => {
    return new Promise((resolve) => {
      setTimeout(() => {
        const result = "windows-10.exe";
        resolve(result);
      }, 3000);
    });
  };
  const main = async () => {
    console.log("Mulai download...");
    const result = await download();
    showDownload(result);
  };
  
  main();
  