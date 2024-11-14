golden-master.txt: 
	php GameRunner.php > golden-master.txt

.PHONY: test
test:
	bash -c "diff golden-master.txt <(php GameRunner.php)"

