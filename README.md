這是簡單的問卷，有前後端(questionaire資料夾)和api(rest的資料夾),但沒有css的樸素介面喔
而questionaire資料夾有index.html(裡面有includes資料夾的php檔案，用來把使用者在前端輸入的問卷答案，運用GET透過網址傳值傳到後端資料庫，
更詳細的說明請見http://www.wibibi.com/info.php?tid=145)
questionaire資料夾還有index.php(把資料庫的東西撈進來成為json檔案，好方便前後端資料的傳輸.而且index.php裡面include的functions.php的page變數
是default setting)
