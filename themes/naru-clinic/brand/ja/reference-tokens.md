# reference-tokens（主參考 https://www.smart-kobe.com/ ；次參考 https://hachioji-dm.com/）
量測：getComputedStyle @1440×900 無頭 Chromium（只記數值，不含素材／文字／logo）。

## (a) 配色（smart-kobe，首屏飽和色占比 0.072）
| 角色 | hex | 面積 |
|---|---|---|
| 底（頁面） | #F8F7F3（暖白）／卡片 #FBFAF7 | ≈23%＋8% |
| 主（標題字、連結） | #3D83C0 | 文字，面積 <5% |
| 輔（服務區整段色帶） | #64A0D3 | 整段背景 1258px（捲到才出現，非首屏） |
| 淡藍（設施區、波浪） | #D4E7ED／#EAF4F8 | ≈15% |
| 文字 ink | #3D5062（內文）／#495865 | ≈9% |
| 點綴（CTA 膠囊） | #8ECE64 綠，文字 #F8F7F3 | <1% |
hachioji（次）：白 #FFFFFF 21%、文字 #595959、點綴橘 #E26D46（公告標題）、logo 黃藍綠、接待櫃台綠條紋 ≈10% 首屏；首屏飽和 0.115。
## (b) 字型
- smart：Outfit＋Zen Kaku Gothic New（黑體），內文 16px／lh 25.6px（1.6）／ls 0.32px（0.02em）／w500；H2 36.67px／lh 58.67／ls 2.2px（0.06em）／w600，色 #3D83C0；H3 23.2px／24px／w600／ls 0.32px；小標英文 13.87px／ls 1.11px（0.08em）／w500；按鈕 16–18px。
- hachioji：Helvetica Neue LT＋A-OTF 黑體；內文 14px／lh 24px／ls 0.7px（0.05em）；H2 42px／lh 52／ls 2.1px／w700；H3 32px、16px；全為無襯線、字距寬。
## (c) 間距
- smart：區塊上下 padding 100／150／200px，服務區下 400px（容納波浪）；波浪分隔帶高 200px；容器內距左右 75px（卡片起點 x=75），內文欄約 1290px；卡片 600px 寬、欄距 30px、卡片內距 20/30px；頂欄高 80px。
- hachioji：容器 x=60→1380（1320px）；首屏大圖 1420×880 距邊 10px；頂欄 140px。
## (d) 圓角／邊框／陰影
- smart：卡片 20px、CTA 膠囊 900px、圖 organic blob（border-radius 100%／50%，30 處）、圓形箭頭鈕 40px（1px 淡藍邊）；無陰影、無邊框。
- hachioji：圖 8px 角、按鈕 4px＋1px #595959 邊、懸浮電話膠囊 ≈540×88、radius 44、白底淡灰細框；無陰影。
## (e) 圖片呈現 — IMAGERY＝photo
- 主要圖像為實拍照片（smart：看護與長者握手的戶外高調照；hachioji：明亮候診室）；插畫僅為小型示意（人體圖、about-sm 小圖）→ photo。
- smart 首屏：全幅 1440×900 照片（長寬比 1.6）無圓角，輪播 3 張；下緣疊波浪 SVG 帶（藍 #64A0D3、淡藍 #D4E7ED、底色三層）佔高約 120px，標語落在波浪下方的底色區。
- smart 內頁：blob 蒙版照片 484×368（≈0.46 寬）＋小 blob 217×192 疊右上位移，位置在右欄；hachioji：首屏大圖 98% 寬、距邊 10px、圓角 8px，下緣置中懸浮膠囊。
## (f) 裝飾
- 波浪分隔帶（SVG 三層，高 200px，上緣曲線，色 #64A0D3→#D4E7ED→#F8F7F3）；標題旁手寫波浪線（≈60×8px，1px #3D83C0）；連結下方波浪底線；英文小標＋波浪線；圓形箭頭鈕 40px 1px 邊。
- hachioji：條紋放射綠帶圖形（品牌圖形）、時鐘／汽車 22px 方形灰鈕、人體圖加細連線（1px #C8C8C8）標示診療項目。
## (g) 動效
- smart：Lenis 平滑捲動；首屏三張以 5s linear 慢速縮放（scale 輪播）；reveal 用 CSS transition＋IntersectionObserver，主要 easing cubic-bezier(.165,.84,.44,1)（69 處）與 (.19,1,.22,1)；部分元素 opacity 1.8s ease；hover 圖示 .25s ease。
- hachioji：GSAP ScrollTrigger scrub（start "top bottom"，ease none）做視差，首屏圖 pagecoverImageZoom 5s linear；視差位移量級 ≈ 127px／500px 捲動（yPercent 25）。
