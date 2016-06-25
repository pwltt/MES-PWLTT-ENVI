import xlwt
import xlrd

def xlsSum( filePrefix , colNum , outputName ):
    book = xlrd.open_workbook(filePrefix)    
    sheet = book.sheet_by_name('DANE')
    data = [sheet.cell_value(row, colNum) for row in range(sheet.nrows)]

    workbook = xlwt.Workbook()
    #workbook = xlrd.open_workbook(outputName)
    sheet = workbook.add_sheet('test')
    for index, value in enumerate(data):
        sheet.write(index, colNum, value)

    workbook.save(outputName)
    print "The number of file copied", colNum
    return

xlsSum("PLIK 1.xlsx", 0, 'output.xls')
xlsSum("PLIK 1.xlsx", 1, 'output.xls')
